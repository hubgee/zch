@extends('layouts.app')
@section('content')

<style>
    .article-page .article-hero {
      margin-top: 70px;
      margin-bottom: 40px;
    }
    .article-page .article-cover {
      border-radius: 18px;
      overflow: hidden;
      box-shadow: 0 18px 36px rgba(15, 23, 42, 0.12);
    }
    .article-page .article-cover img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
    }
    .article-page .article-badge {
      display: inline-block;
      padding: 6px 12px;
      border-radius: 999px;
      background: #eaf4ff;
      color: #0056b3;
      font-size: 12px;
      font-weight: 700;
      letter-spacing: 0.4px;
      text-transform: uppercase;
      margin-bottom: 14px;
    }
    .article-page .article-title {
      color: #1f2f46;
      font-size: 3rem;
      line-height: 1.15;
      font-weight: 400;
      margin-bottom: 16px;
    }
    .article-page .article-meta {
      display: block;
      color: #6b7280;
      margin-bottom: 18px;
      font-size: 15px;
    }
    .article-page .article-content {
      color: #40526b;
      font-size: 17px;
      line-height: 1.95;
    }
    .article-page .article-content p {
      margin-bottom: 18px;
    }
    .article-page .article-quote {
      background: linear-gradient(135deg, #0056b3, #00c6ff);
      color: #ffffff;
      border-radius: 16px;
      padding: 22px 24px;
      margin: 26px 0;
      font-size: 18px;
      line-height: 1.8;
      font-weight: 600;
      box-shadow: 0 14px 28px rgba(0, 86, 179, 0.16);
    }
    .article-page .article-facts {
      background: #f8fafc;
      border-left: 5px solid #00a8cc;
      border-radius: 12px;
      padding: 18px 20px;
      margin: 28px 0 20px;
    }
    .article-page .article-facts h4 {
      font-size: 20px;
      margin-bottom: 12px;
      color: #1f2f46;
    }
    .article-page .article-facts ul {
      margin: 0;
      padding-left: 18px;
      color: #40526b;
      line-height: 1.8;
    }
    .article-page .article-back {
      margin-top: 30px;
    }
    .article-page .article-back .btn-style-one {
      background: #0056b3;
      color: #ffffff;
      border-color: #0056b3;
    }
    .article-page .article-back .btn-style-one:hover {
      background: #00a8cc;
      border-color: #00a8cc;
    }
    .recent-post-widget {
      background: #ffffff;
      padding-top: 2px;
    }
    .recent-post-widget .text-title {
      border-bottom: 1px solid #e6ebf2;
      padding-bottom: 10px;
      margin-bottom: 8px;
    }
    .recent-post-widget .text-title h6 {
      color: #111827;
      font-size: 28px;
      font-weight: 600;
      line-height: 1.2;
      margin-bottom: 0;
    }
    .recent-post-widget .text-title::after {
      content: "";
      display: block;
      width: 52px;
      height: 3px;
      background: #1ea7d8;
      margin-top: 10px;
      border-radius: 999px;
    }
    .recent-post-widget .post-item {
      display: flex;
      align-items: flex-start;
      gap: 14px;
      padding: 18px 0;
      border-top: 1px solid #e6ebf2;
    }
    .recent-post-widget .post-item:first-of-type {
      border-top: 0;
      padding-top: 16px;
    }
    .recent-post-widget .thumb {
      width: 100px;
      height: 100px;
      border-radius: 6px;
      object-fit: cover;
      flex-shrink: 0;
      box-shadow: 0 8px 18px rgba(31, 47, 70, 0.10);
    }
    .recent-post-widget .post-date {
      display: block;
      color: #7f8ea6;
      font-size: 14px;
      line-height: 1.3;
      margin-bottom: 8px;
    }
    .recent-post-widget .post-title {
      color: #1f2f46;
      font-size: 19px;
      line-height: 1.4;
      font-weight: 600;
      text-decoration: none;
      display: inline-block;
    }
    .recent-post-widget .post-title:hover {
      color: #0da8d6;
      text-decoration: none;
    }
    @media (max-width: 1199px) {
      .recent-post-widget .thumb {
        width: 88px;
        height: 88px;
      }
      .recent-post-widget .post-title {
        font-size: 17px;
      }
    }
    @media (max-width: 575px) {
      .recent-post-widget .thumb {
        width: 78px;
        height: 78px;
      }
      .recent-post-widget .post-item {
        gap: 12px;
      }
      .recent-post-widget .text-title h6 {
        font-size: 24px;
      }
    }
    @media (max-width: 991px) {
      .article-page .article-title {
        font-size: 2.2rem;
      }
      .article-page .article-hero {
        margin-top: 50px;
      }
    }
  </style>
  <section class="page-title text-center" style="background-image:url(images/background/3a.jpg?v=20260602);">
      <div class="container">
        <div class="title-text">
          <h1>STANDARD BANK Maternity HDU Handover</h1>
          <ul class="title-menu clearfix">
            <li><a href="index.html">home &nbsp;/</a></li>
            <li><a href="news.html">latest news &nbsp;/</a></li>
            <li>article</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="article-hero section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="article-cover mb-4">
              <img loading="lazy" src="images/news/news1.jpg" alt="Standard Bank handover at Zomba Central Hospital">
            </div>
            <span class="article-badge">Featured News</span>
            <h3 class="article-title">Standard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital.</h3>
            <span class="article-meta">Zomba Central Hospital News Desk | Health Infrastructure | 2026</span>

            <div class="article-content">
              <p>Standard Bank plc has today handed over a refurbished maternity wing high dependency unit (HDU) at Zomba Central Hospital (ZCH). The bank has spent K210 million in renovating the HDU into a six-bed unit with equipment for monitoring mothers and babies.</p>

              <p>Speaking during the handover ceremony at the hospital in Zomba, deputy minister of health Noah Chimpeni said the HDU will have a significant impact on health outcomes for mothers and babies. He noted that ZCH conducts around 800 deliveries per month, and about 15 percent are through caesarian procedure, but the facility previously lacked adequate equipment to support this level of care.</p>

              <div class="article-quote">
                “The refurbished HDU is a meaningful investment in safer maternal care, better monitoring, and stronger support for newborns and mothers who need close observation.”
              </div>

              <p>On his part, Standard Bank chief executive officer Phillip Madinga said the bank recognises the importance of investing in healthcare infrastructure. He added that the renovation of the HDU is a continuation of the bank's efforts to drive growth in Malawi.</p>

              <div class="article-facts">
                <h4>Key facts from the handover</h4>
                <ul>
                  <li>K210 million invested in the refurbishment.</li>
                  <li>The HDU was upgraded into a six-bed unit.</li>
                  <li>The unit is equipped for monitoring mothers and babies.</li>
                  <li>ZCH handles about 800 deliveries per month.</li>
                </ul>
              </div>

              <p>This article is the first featured story on the Zomba Central Hospital news page. More articles can be added later and linked to their own single pages using the same structure.</p>
            </div>

            <div class="article-back">
              <a href="news.html" class="btn-style-one">Back to News</a>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="right-side">
              <div class="recent-post-widget">
                <div class="text-title">
                  <h6>Recent Post</h6>
                </div>
                <div class="post-item">
                  <img loading="lazy" class="thumb" src="images/news/news1.jpg" alt="recent post thumbnail">
                  <div>
                    <span class="post-date">May 27, 2026</span>
                    <a class="post-title" href="single-news.html">Standard Bank refurbishes maternity HDU...</a>
                  </div>
                </div>
                <div class="post-item">
                  <img loading="lazy" class="thumb" src="images/blog/6a.jpg" alt="recent post thumbnail">
                  <div>
                    <span class="post-date">May 25, 2026</span>
                    <a class="post-title" href="news.html">Wondering if interior design is dying...</a>
                  </div>
                </div>
                <div class="post-item">
                  <img loading="lazy" class="thumb" src="images/blog/7a.jpg" alt="recent post thumbnail">
                  <div>
                    <span class="post-date">May 20, 2019</span>
                    <a class="post-title" href="news.html">Low cost interior designing ideas for...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection