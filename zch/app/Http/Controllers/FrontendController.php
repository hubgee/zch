<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Mail\JobApplicationMail;
use App\Models\Department;
use App\Models\DownloadsPage;
use App\Models\EventsPage;
use App\Models\Facilities;
use App\Models\ServicePage;
use App\Models\Faq;
use App\Models\GalleryPage;
use App\Models\HomePage;
use App\Models\LatestNews;
use App\Models\Management;
use App\Models\OnlineApplicationPage;
use App\Models\Organogram;
use App\Models\SpecialistDoctor;
use App\Models\Structure;
use App\Models\TestimonialPage;
use App\Models\CareerPage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FrontendController extends Controller
{
    /**
     * @param  class-string<Model>  $modelClass
     */
    private function editablePage(string $modelClass, string $view): \Illuminate\View\View
    {
        $page = $modelClass::current();

        return view($view, compact('page'));
    }

    private function simplePage(string $title, string $intro, array $items = [], array $cta = []): \Illuminate\View\View
    {
        return view('frontend.page', [
            'pageTitle' => $title,
            'intro' => $intro,
            'items' => $items,
            'cta' => $cta,
        ]);
    }

    public function home()
    {
        $homePage = HomePage::current();
        $newsPage = LatestNews::current();
        $newsArticles = $this->newsArticles($newsPage);
        $homeNewsItems = collect($newsArticles)
            ->take(2)
            ->map(function (array $article): array {
                return [
                    'type' => 'news',
                    'category' => 'Latest News',
                    'title' => $article['title'] ?? '',
                    'excerpt' => $article['excerpt'] ?? '',
                    'image' => $article['image'] ?? null,
                    'resolved_url' => route('frontend.news.article', ['article' => $article['slug']]),
                    'resolved_external' => false,
                ];
            })
            ->merge(collect($homePage->news_items ?? [])
                ->filter(fn (array $item): bool => ($item['type'] ?? 'news') === 'facebook')
                ->map(function (array $item): array {
                    $item['resolved_url'] = HomePage::resolveUrl($item['url'] ?? null);
                    $item['resolved_external'] = str_starts_with($item['url'] ?? '', 'http');

                    return $item;
                }))
            ->values()
            ->all();

        view()->share('homePage', $homePage);

        return view('frontend.home', compact('homePage', 'homeNewsItems'));
    }

    public function about()
    {
        return $this->editablePage(About::class, 'frontend.about');
    }

    public function management()
    {
        return $this->editablePage(Management::class, 'frontend.management');
    }

    public function facilities()
    {
        return $this->editablePage(Facilities::class, 'frontend.facilities');
    }

    public function appointment()
    {
        return view('frontend.appointment');
    }

    public function audio()
    {
        $page = GalleryPage::current();

        return view('frontend.audio', compact('page'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function structure()
    {
        return $this->editablePage(Structure::class, 'frontend.structure');
    }

    public function faq()
    {
        return $this->editablePage(Faq::class, 'frontend.faq');
    }

    public function organogram()
    {
        return $this->editablePage(Organogram::class, 'frontend.organogram');
    }

    public function departments()
    {
        $departments = Department::allPublished();

        return view('frontend.departments', compact('departments'));
    }

    public function surgical()
    {
        $department = Department::findBySlug('surgical');

        return view('frontend.surgical', compact('department'));
    }

    public function maternalChild()
    {
        $department = Department::findBySlug('maternal-child');

        return view('frontend.maternal-child', compact('department'));
    }

    public function diagnostic()
    {
        $department = Department::findBySlug('diagnostic');

        return view('frontend.diagnostic', compact('department'));
    }

    public function emergency()
    {
        $department = Department::findBySlug('emergency');

        return view('frontend.emergency', compact('department'));
    }

    public function medical()
    {
        $department = Department::findBySlug('medical');

        return view('frontend.medical', compact('department'));
    }

    public function services()
    {
        $page = ServicePage::current();

        return view('frontend.services', compact('page'));
    }

    public function doctors()
    {
        $page = SpecialistDoctor::current();

        return view('frontend.doctors', compact('page'));
    }

    public function news()
    {
        $page = LatestNews::current();
        $articles = $this->newsArticles($page);

        return view('frontend.news', compact('page', 'articles'));
    }

    public function newsArticle(string $article)
    {
        $page = LatestNews::current();
        $articles = $this->newsArticles($page);
        $selectedArticle = collect($articles)->firstWhere('slug', $article);

        abort_if($selectedArticle === null, 404);

        $relatedArticles = collect($articles)
            ->reject(fn (array $item): bool => $item['slug'] === $selectedArticle['slug'])
            ->take(3)
            ->values()
            ->all();

        return view('frontend.single-news', compact('page', 'selectedArticle', 'relatedArticles'));
    }

    /**
     * @return list<array<string, mixed>>
     */
    private function newsArticles(LatestNews $page): array
    {
        $usedSlugs = [];

        return collect(data_get($page->content_data, 'articles', []))
            ->map(function (array $article) use (&$usedSlugs): array {
                $baseSlug = Str::slug($article['slug'] ?? $article['title'] ?? 'article') ?: 'article';
                $slug = $baseSlug;
                $suffix = 2;

                while (isset($usedSlugs[$slug])) {
                    $slug = "{$baseSlug}-{$suffix}";
                    $suffix++;
                }

                $usedSlugs[$slug] = true;
                $article['slug'] = $slug;

                return $article;
            })
            ->values()
            ->all();
    }

    public function photos()
    {
        $page = GalleryPage::current();

        return view('frontend.photos', compact('page'));
    }

    public function videos()
    {
        $page = GalleryPage::current();

        return view('frontend.videos', compact('page'));
    }

    public function events()
    {
        $page = EventsPage::current();

        return view('frontend.events', compact('page'));
    }

    public function onlineApplication()
    {
        $page = OnlineApplicationPage::current();

        return view('frontend.online-application', compact('page'));
    }

    public function online_application()
    {
        return $this->onlineApplication();
    }

    public function submitOnlineApplication()
    {
        $validated = request()->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'date_of_birth' => 'required|date',
            'national_id' => 'nullable|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'address' => 'nullable|string',
            'department' => 'nullable|string|max:255',
            'position_title' => 'nullable|string|max:255',
            'employment_type' => 'nullable|string|max:255',
            'experience' => 'nullable|string|max:100',
            'qualification' => 'nullable|string|max:255',
            'institution' => 'nullable|string|max:255',
            'year_completed' => 'nullable|string|max:10',
            'certifications' => 'nullable|string',
            'cover_letter' => 'nullable|string',
        ]);

        $recipients = ['mphiningoh@gmail.com', 'amphiningo@gmail.com'];

        foreach ($recipients as $to) {
            \Illuminate\Support\Facades\Mail::to($to)->send(new JobApplicationMail($validated));
        }

        return redirect()
            ->route('frontend.online_application')
            ->with('success', 'Your application has been submitted successfully. We will get back to you shortly.');
    }

    public function downloads()
    {
        $page = DownloadsPage::current();

        return view('frontend.downloads', compact('page'));
    }

    public function testimonials()
    {
        $page = TestimonialPage::current();

        return view('frontend.testimonials', compact('page'));
    }

    public function vacancies()
    {
        $page = CareerPage::current();
        $pageData = $page?->content_data ?? [];

        $advertised = collect(data_get($pageData, 'advertised', []))->map(fn ($item) => $item + ['section' => 'advertised']);
        $shortlisted = collect(data_get($pageData, 'shortlisted', []))->map(fn ($item) => $item + ['section' => 'shortlisted']);
        $appointments = collect(data_get($pageData, 'appointments', []))->map(fn ($item) => $item + ['section' => 'appointments']);
        $instructions = collect(data_get($pageData, 'instructions', []))->map(fn ($item) => $item + ['section' => 'instructions']);
        $archived = collect(data_get($pageData, 'archived', []))->map(fn ($item) => $item + ['section' => 'archived']);
        $careersJson = $advertised->concat($shortlisted)->concat($appointments)->concat($instructions)->concat($archived);

        return view('frontend.careers', compact('page', 'careersJson'));
    }
}
