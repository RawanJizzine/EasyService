@section('title', 'Landing Page ')

@extends('layouts/layoutFront')
@section('contentFront')

    <div data-bs-spy="scroll" class="scrollspy-example">


        <!-- Useful Hero: Start -->
        @if ($home)
            <section id="hero-animation">
                <div id="landingHero" class="section-py landing-hero position-relative">
                    <div class="container">
                        <div class="hero-text-box text-center">
                            <h1 class="text-primary hero-title display-6 fw-bold">{{ $home->title ?? '' }}</h1>
                            <h2 class="hero-sub-title h6 mb-4 pb-1">
                                {{ $home->main_description ?? '' }}<br class="d-none d-lg-block" />
                                {{ $home->secondary_description ?? '' }}.
                            </h2>
                            <div class="landing-hero-btn d-inline-block position-relative">
                                <span class="hero-btn-item position-absolute d-none d-md-flex text-heading">Join community
                                    <img src="../../assets/img/front-pages/icons/Join-community-arrow.png"
                                        alt="Join community arrow" class="scaleX-n1-rtl" /></span>
                                <a href="#landingPricing" class="btn btn-primary btn-lg">{{ $home->button_text ?? '' }}</a>
                            </div>
                        </div>
                        <div id="heroDashboardAnimation" class="hero-animation-img">
                            <a href="#landingPricing" target="_blank">
                                <div id="heroAnimationImg" class="position-relative hero-dashboard-img">

                                    <div id="heroAnimationImg" class="position-relative hero-dashboard-img">
                                        <img src="{{ asset('storage/' . $home->image_link_dashboard) ?? '' }}"
                                            alt="hero dashboard" class="animation-img" />
                                        <img src="{{ asset('storage/' . $home->image_link_element) ?? '' }}"alt="hero elements"
                                            class="position-absolute hero-elements-img animation-img top-0 start-0" />
                                    </div>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="landing-hero-blank"></div>
            </section>
        @endif

        <!-- Hero: End -->


        <!-- Useful features: Start -->
        @if ($enter_auth === 'true')
            @if (auth()->check() &&
                    (auth()->user()->role == 'admin' ||
                        (auth()->user()->role == 'user' &&
                            ($subscription && in_array($subscription->plan_name, ['plan 1', 'plan 2', 'plan 3'])))))
                @if ($feature)
                    <section id="landingFeatures" class="section-py landing-features">
                        <div class="container">
                            <div class="text-center mb-3 pb-1">
                                <span class="badge bg-label-primary">{{ $feature->title ?? '' }}</span>
                            </div>
                            <h3 class="text-center mb-1">
                                <span class="section-title">{{ $feature->main_description ?? '' }}</span>
                                {{ $feature->secondary_description ?? '' }}
                            </h3>
                            <p class="text-center mb-3 mb-md-5 pb-3">
                                {{ $feature->tertiary_description ?? '' }}
                            </p>
                            @if ($feature_data)
                                <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                                    @foreach ($feature_data ?? [] as $item)
                                        <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                                            <div class="text-center mb-3">

                                                <img src="{{ asset('storage/' . $item['image']) ?? '' }}" alt="Icon" />
                                            </div>
                                            <h5 class="mb-3">{{ $item['title'] }}</h5>
                                            <p class="features-icon-description">
                                                {{ $item['description'] }}
                                            </p>
                                        </div>
                                    @endforeach

                                </div>
                            @endif
                        </div>
                    </section>
                @endif

            @endif
        @else
            @if ($feature)
                <section id="landingFeatures" class="section-py landing-features">
                    <div class="container">
                        <div class="text-center mb-3 pb-1">
                            <span class="badge bg-label-primary">{{ $feature->title ?? '' }}</span>
                        </div>
                        <h3 class="text-center mb-1">
                            <span class="section-title">{{ $feature->main_description ?? '' }}</span>
                            {{ $feature->secondary_description ?? '' }}
                        </h3>
                        <p class="text-center mb-3 mb-md-5 pb-3">
                            {{ $feature->tertiary_description ?? '' }}
                        </p>
                        @if ($feature_data)
                            <div class="features-icon-wrapper row gx-0 gy-4 g-sm-5">
                                @foreach ($feature_data ?? [] as $item)
                                    <div class="col-lg-4 col-sm-6 text-center features-icon-box">
                                        <div class="text-center mb-3">

                                            <img src="{{ asset('storage/' . $item['image']) ?? '' }}" alt="Icon" />
                                        </div>
                                        <h5 class="mb-3">{{ $item['title'] }}</h5>
                                        <p class="features-icon-description">
                                            {{ $item['description'] }}
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                        @endif
                    </div>
                </section>
            @endif

        @endif
        <!-- Useful features: End -->




        <!-- Useful Reviews: Start -->
        @if ($enter_auth === 'true')
            @if (auth()->check() &&
                    (auth()->user()->role == 'admin' ||
                        (auth()->user()->role == 'user' && ($subscription && in_array($subscription->plan_name, ['plan 3'])))))
                @if ($reviews)
                    <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
                        <!-- What people say slider: Start -->
                        <div class="container">
                            <div class="row align-items-center gx-0 gy-4 g-lg-5">
                                <div class="col-md-6 col-lg-5 col-xl-3">
                                    <div class="mb-3 pb-1">
                                        <span class="badge bg-label-primary">{{ $reviews->title ?? '' }}</span>
                                    </div>
                                    <h3 class="mb-1"><span
                                            class="section-title">{{ $reviews->first_description_review ?? '' }}</span>
                                    </h3>
                                    <p class="mb-3 mb-md-5">
                                        {{ $reviews->second_description_review ?? '' }}<br class="d-none d-xl-block" />
                                        {{ $reviews->tertiary_description_review ?? '' }}
                                    </p>
                                    <div class="landing-reviews-btns">
                                        <button id="reviews-previous-btn"
                                            class="btn btn-label-primary reviews-btn me-3 scaleX-n1-rtl" type="button">
                                            <i class="ti ti-chevron-left ti-sm"></i>
                                        </button>
                                        <button id="reviews-next-btn"
                                            class="btn btn-label-primary reviews-btn scaleX-n1-rtl" type="button">
                                            <i class="ti ti-chevron-right ti-sm"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-7 col-xl-9">
                                    <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                                        <div class="swiper" id="swiper-reviews">
                                            @if ($review_data)
                                                <div class="swiper-wrapper">

                                                    @foreach ($review_data ?? [] as $key => $review)
                                                        <div class="swiper-slide">
                                                            <div class="card h-100">
                                                                <div
                                                                    class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                                    <div class="mb-3">
                                                                        <img src="{{ asset('storage/' . $review['image']) ?? '' }}"
                                                                            alt="client logo"
                                                                            class="client-logo img-fluid" />
                                                                    </div>
                                                                    <p>
                                                                        {{ $review['description'] }}
                                                                    </p>
                                                                    <div class="text-warning mb-3">
                                                                        @for ($i = 1; $i <= 5; $i++)
                                                                            @if ($i <= $review['rating'])
                                                                                <i class="ti ti-star-filled ti-sm"></i>
                                                                            @else
                                                                                <i class="ti ti-star ti-sm"></i>
                                                                            @endif
                                                                        @endfor
                                                                    </div>
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="avatar me-2 avatar-sm">
                                                                            <img src="{{ asset('storage/' . $review['icon']) ?? '' }}"
                                                                                alt="Avatar" class="rounded-circle" />
                                                                        </div>
                                                                        <div>
                                                                            <h6 class="mb-0">{{ $review['name'] }}</h6>
                                                                            <p class="small text-muted mb-0">
                                                                                {{ $review['position'] }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            @endif
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- What people say slider: End -->
                        <hr class="m-0" />












                        <!-- Logo slider: Start -->
                        @if ($logosdata)
                            <div class="container">
                                <div class="swiper-logo-carousel py-4 my-lg-2">
                                    <div class="swiper" id="swiper-clients-logos">
                                        <div class="swiper-wrapper">

                                            @foreach ($logosdata ?? [] as $logo)
                                                <div class="swiper-slide">

                                                    <img src="{{ asset('storage/' . $logo['image']) ?? '' }}"
                                                        alt="client logo" class="client-logo" />
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- Logo slider: End -->
                    </section>
                @endif

            @endif
        @else
            @if ($reviews)
                <section id="landingReviews" class="section-py bg-body landing-reviews pb-0">
                    <!-- What people say slider: Start -->
                    <div class="container">
                        <div class="row align-items-center gx-0 gy-4 g-lg-5">
                            <div class="col-md-6 col-lg-5 col-xl-3">
                                <div class="mb-3 pb-1">
                                    <span class="badge bg-label-primary">{{ $reviews->title ?? '' }}</span>
                                </div>
                                <h3 class="mb-1"><span
                                        class="section-title">{{ $reviews->first_description_review ?? '' }}</span>
                                </h3>
                                <p class="mb-3 mb-md-5">
                                    {{ $reviews->second_description_review ?? '' }}<br class="d-none d-xl-block" />
                                    {{ $reviews->tertiary_description_review ?? '' }}
                                </p>
                                <div class="landing-reviews-btns">
                                    <button id="reviews-previous-btn"
                                        class="btn btn-label-primary reviews-btn me-3 scaleX-n1-rtl" type="button">
                                        <i class="ti ti-chevron-left ti-sm"></i>
                                    </button>
                                    <button id="reviews-next-btn" class="btn btn-label-primary reviews-btn scaleX-n1-rtl"
                                        type="button">
                                        <i class="ti ti-chevron-right ti-sm"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-7 col-xl-9">
                                <div class="swiper-reviews-carousel overflow-hidden mb-5 pb-md-2 pb-md-3">
                                    <div class="swiper" id="swiper-reviews">
                                        @if ($review_data)
                                            <div class="swiper-wrapper">

                                                @foreach ($review_data ?? [] as $key => $review)
                                                    <div class="swiper-slide">
                                                        <div class="card h-100">
                                                            <div
                                                                class="card-body text-body d-flex flex-column justify-content-between h-100">
                                                                <div class="mb-3">
                                                                    <img src="{{ asset('storage/' . $review['image']) ?? '' }}"
                                                                        alt="client logo" class="client-logo img-fluid" />
                                                                </div>
                                                                <p>
                                                                    {{ $review['description'] }}
                                                                </p>
                                                                <div class="text-warning mb-3">
                                                                    @for ($i = 1; $i <= 5; $i++)
                                                                        @if ($i <= $review['rating'])
                                                                            <i class="ti ti-star-filled ti-sm"></i>
                                                                        @else
                                                                            <i class="ti ti-star ti-sm"></i>
                                                                        @endif
                                                                    @endfor
                                                                </div>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="avatar me-2 avatar-sm">
                                                                        <img src="{{ asset('storage/' . $review['icon']) ?? '' }}"
                                                                            alt="Avatar" class="rounded-circle" />
                                                                    </div>
                                                                    <div>
                                                                        <h6 class="mb-0">{{ $review['name'] }}</h6>
                                                                        <p class="small text-muted mb-0">
                                                                            {{ $review['position'] }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach

                                            </div>
                                        @endif
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- What people say slider: End -->
                    <hr class="m-0" />












                    <!-- Logo slider: Start -->
                    @if ($logosdata)
                        <div class="container">
                            <div class="swiper-logo-carousel py-4 my-lg-2">
                                <div class="swiper" id="swiper-clients-logos">
                                    <div class="swiper-wrapper">

                                        @foreach ($logosdata ?? [] as $logo)
                                            <div class="swiper-slide">

                                                <img src="{{ asset('storage/' . $logo['image']) ?? '' }}"
                                                    alt="client logo" class="client-logo" />
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- Logo slider: End -->
                </section>
            @endif

        @endif

        <!-- Useful Reviews: End -->




        <!-- Useful Teams: Start -->
        @if ($enter_auth === 'true')
            @if (auth()->check() &&
                    (auth()->user()->role == 'admin' ||
                        (auth()->user()->role == 'user' &&
                            ($subscription && in_array($subscription->plan_name, ['plan 3', 'plan 2'])))))
                @if ($team)
                    <section id="landingTeam" class="section-py landing-team">
                        <div class="container">
                            <div class="text-center mb-3 pb-1">
                                <span class="badge bg-label-primary">{{ $team->title ?? '' }}</span>
                            </div>
                            <h3 class="text-center mb-1"><span class="section-title">{{ $team->first_text ?? '' }}</span>
                                {{ $team->second_text ?? '' }}</h3>
                            <p class="text-center mb-md-5 pb-3">{{ $team->tertiary_text ?? '' }}?</p>
                            @if ($team_data)
                                <div class="row gy-5 mt-2">

                                    @foreach ($team_data ?? [] as $data)
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="card mt-3 mt-lg-0 shadow-none">
                                                <div class="{{ $data['color_label'] }} position-relative team-image-box">
                                                    <img src="{{ asset('storage/' . $data['image']) ?? '' }}"
                                                        class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                                        alt="human image" />
                                                </div>
                                                <div
                                                    class="card-body border border-top-0 {{ $data['color_border'] }} text-center">
                                                    <h5 class="card-title mb-0">{{ $data['name'] }}</h5>
                                                    <p class="text-muted mb-0">{{ $data['position'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            @endif
                        </div>
                    </section>
                @endif

            @endif
        @else
            @if ($team)
                <section id="landingTeam" class="section-py landing-team">
                    <div class="container">
                        <div class="text-center mb-3 pb-1">
                            <span class="badge bg-label-primary">{{ $team->title ?? '' }}</span>
                        </div>
                        <h3 class="text-center mb-1"><span class="section-title">{{ $team->first_text ?? '' }}</span>
                            {{ $team->second_text ?? '' }}</h3>
                        <p class="text-center mb-md-5 pb-3">{{ $team->tertiary_text ?? '' }}?</p>
                        @if ($team_data)
                            <div class="row gy-5 mt-2">

                                @foreach ($team_data ?? [] as $data)
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="card mt-3 mt-lg-0 shadow-none">
                                            <div class="{{ $data['color_label'] }} position-relative team-image-box">
                                                <img src="{{ asset('storage/' . $data['image']) ?? '' }}"
                                                    class="position-absolute card-img-position bottom-0 start-50 scaleX-n1-rtl"
                                                    alt="human image" />
                                            </div>
                                            <div
                                                class="card-body border border-top-0 {{ $data['color_border'] }} text-center">
                                                <h5 class="card-title mb-0">{{ $data['name'] }}</h5>
                                                <p class="text-muted mb-0">{{ $data['position'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        @endif
                    </div>
                </section>


            @endif

        @endif

        <!-- Useful Teams: End -->







        <!-- Useful  Pricing Plans: Start -->
        @if ($enter_auth === 'false')

            @if (auth()->check() &&
                    (auth()->user()->role == 'user' &&
                        ($subscription && in_array($subscription->plan_name, ['plan 1', 'plan 2', 'plan 3']))))

                <section id="landingPricing" class="section-py bg-body landing-pricing">
                    <div class="container">
                        <div class="text-center mb-3 pb-1">
                            <span class="badge bg-label-primary">{{ $plan->title ?? '' }}</span>
                        </div>
                        <h3 class="text-center mb-1"><span
                                class="section-title">{{ $plan->first_description ?? '' }}</span>
                            {{ $plan->second_description ?? '' }}</h3>
                        <p class="text-center mb-4 pb-3">
                            {{ $plan->tertiary_description ?? '' }}<br />
                            {{ $plan->four_description ?? '' }}

                        </p>
                        <div class="text-center mb-5">
                            <div class="position-relative d-inline-block pt-3 pt-md-0">
                                <label class="switch switch-primary me-0">
                                    <span class="switch-label">{{ $plan->text_switch_left ?? '' }}</span>
                                    <input type="checkbox" class="switch-input price-duration-toggler" checked />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">{{ $plan->text_switch_right ?? '' }}</span>
                                </label>
                                <div class="pricing-plans-item position-absolute d-flex">
                                    <img src="../../assets/img/front-pages/icons/pricing-plans-arrow.png"
                                        alt="pricing plans arrow" class="scaleX-n1-rtl" />
                                    <span class="fw-semibold mt-2 ms-1"> Save 25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-4 pt-lg-3">
                            <!-- Basic Plan: Start -->
                            @foreach ($plan_pricing_data as $plan_data)
                                <div class="col-xl-4 col-lg-6">

                                    @if (optional($subscription)->plan_name === 'plan 1' && $plan_data->title === 'Team')
                                        <div class="card   border border-primary shadow-lg">
                                            <div class="card-header">
                                                <div class="text-center">
                                                    <img src="{{ asset('storage/' . $plan_data->image) ?? '' }}"
                                                        alt="paper airplane icon" class="mb-4 pb-2" />
                                                    <h4 class="mb-1">{{ $plan_data->title ?? '' }}</h4>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <span
                                                            class="price-monthly h1 text-primary fw-bold mb-0">${{ $plan_data->monthly_price ?? '' }}</span>
                                                        <span
                                                            class="price-yearly h1 text-primary fw-bold mb-0 d-none">${{ $plan_data->yearly_price ?? '' }}</span>
                                                        <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                                    </div>
                                                    <div class="position-relative pt-2">
                                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$
                                                            {{ $plan_data->total_price ?? '' }} / year</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    @foreach ($plan_data->planLists ?? [] as $first)
                                                        <li>
                                                            <h5>
                                                                <span
                                                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"><i
                                                                        class="ti ti-check ti-xs"></i></span>
                                                                {{ $first->content_list ?? '' }}
                                                            </h5>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <div class="d-grid mt-4 pt-3">
                                                    <a href="" class="btn btn-primary"
                                                        id="paymentPlan1">{{ $pricingPlan->button_pricing_one ?? '' }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif(optional($subscription)->plan_name === 'plan 2' && $plan_data->title === 'Basic')
                                        <div class="card   border border-primary shadow-lg">
                                            <div class="card-header">
                                                <div class="text-center">
                                                    <img src="{{ asset('storage/' . $plan_data->image) ?? '' }}"
                                                        alt="paper airplane icon" class="mb-4 pb-2" />
                                                    <h4 class="mb-1">{{ $plan_data->title ?? '' }}</h4>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <span
                                                            class="price-monthly h1 text-primary fw-bold mb-0">${{ $plan_data->monthly_price ?? '' }}</span>
                                                        <span
                                                            class="price-yearly h1 text-primary fw-bold mb-0 d-none">${{ $plan_data->yearly_price ?? '' }}</span>
                                                        <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                                    </div>
                                                    <div class="position-relative pt-2">
                                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$
                                                            {{ $plan_data->total_price ?? '' }} / year</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    @foreach ($plan_data->planLists ?? [] as $first)
                                                        <li>
                                                            <h5>
                                                                <span
                                                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"><i
                                                                        class="ti ti-check ti-xs"></i></span>
                                                                {{ $first->content_list ?? '' }}
                                                            </h5>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <div class="d-grid mt-4 pt-3">
                                                    <a href="" class="btn btn-primary"
                                                        id="paymentPlan1">{{ $pricingPlan->button_pricing_one ?? '' }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif(optional($subscription)->plan_name === 'plan 3' && $plan_data->title === 'Enterprise')
                                        <div class="card   border border-primary shadow-lg">
                                            <div class="card-header">
                                                <div class="text-center">
                                                    <img src="{{ asset('storage/' . $plan_data->image) ?? '' }}"
                                                        alt="paper airplane icon" class="mb-4 pb-2" />
                                                    <h4 class="mb-1">{{ $plan_data->title ?? '' }}</h4>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <span
                                                            class="price-monthly h1 text-primary fw-bold mb-0">${{ $plan_data->monthly_price ?? '' }}</span>
                                                        <span
                                                            class="price-yearly h1 text-primary fw-bold mb-0 d-none">${{ $plan_data->yearly_price ?? '' }}</span>
                                                        <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                                    </div>
                                                    <div class="position-relative pt-2">
                                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$
                                                            {{ $plan_data->total_price ?? '' }} / year</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    @foreach ($plan_data->planLists ?? [] as $first)
                                                        <li>
                                                            <h5>
                                                                <span
                                                                    class="badge badge-center rounded-pill bg-primary p-0 me-2"><i
                                                                        class="ti ti-check ti-xs"></i></span>
                                                                {{ $first->content_list ?? '' }}
                                                            </h5>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <div class="d-grid mt-4 pt-3">
                                                    <a href="" class="btn btn-primary"
                                                        id="paymentPlan1">{{ $pricingPlan->button_pricing_one ?? '' }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="card   ">
                                            <div class="card-header">
                                                <div class="text-center">
                                                    <img src="{{ asset('storage/' . $plan_data->image) ?? '' }}"
                                                        alt="paper airplane icon" class="mb-4 pb-2" />
                                                    <h4 class="mb-1">{{ $plan_data->title ?? '' }}</h4>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <span
                                                            class="price-monthly h1 text-primary fw-bold mb-0">${{ $plan_data->monthly_price ?? '' }}</span>
                                                        <span
                                                            class="price-yearly h1 text-primary fw-bold mb-0 d-none">${{ $plan_data->yearly_price ?? '' }}</span>
                                                        <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                                    </div>
                                                    <div class="position-relative pt-2">
                                                        <div class="price-yearly text-muted price-yearly-toggle d-none">$
                                                            {{ $plan_data->total_price ?? '' }} / year</div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="card-body">
                                                <ul class="list-unstyled">
                                                    @foreach ($plan_data->planLists ?? [] as $first)
                                                        <li>
                                                            <h5>
                                                                <span
                                                                    class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i
                                                                        class="ti ti-check ti-xs"></i></span>
                                                                {{ $first->content_list ?? '' }}
                                                            </h5>
                                                        </li>
                                                    @endforeach

                                                </ul>
                                                <div class="d-grid mt-4 pt-3">
                                                    <a href="" class="btn btn-label-primary"
                                                        id="{{ $plan_data->id }}">{{ $plan_data->text_button ?? '' }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                </div>
                            @endforeach



                        </div>
                    </div>
                </section>
            @else
                <section id="landingPricing" class="section-py bg-body landing-pricing">
                    <div class="container">
                        <div class="text-center mb-3 pb-1">
                            <span class="badge bg-label-primary">{{ $plan->title ?? '' }}</span>
                        </div>
                        <h3 class="text-center mb-1"><span
                                class="section-title">{{ $plan->first_description ?? '' }}</span>
                            {{ $plan->second_description ?? '' }}</h3>
                        <p class="text-center mb-4 pb-3">
                            {{ $plan->tertiary_description ?? '' }}<br />
                            {{ $plan->four_description ?? '' }}

                        </p>
                        <div class="text-center mb-5">
                            <div class="position-relative d-inline-block pt-3 pt-md-0">
                                <label class="switch switch-primary me-0">
                                    <span class="switch-label">{{ $plan->text_switch_left ?? '' }}</span>
                                    <input type="checkbox" class="switch-input price-duration-toggler" checked />
                                    <span class="switch-toggle-slider">
                                        <span class="switch-on"></span>
                                        <span class="switch-off"></span>
                                    </span>
                                    <span class="switch-label">{{ $plan->text_switch_right ?? '' }}</span>
                                </label>
                                <div class="pricing-plans-item position-absolute d-flex">
                                    <img src="../../assets/img/front-pages/icons/pricing-plans-arrow.png"
                                        alt="pricing plans arrow" class="scaleX-n1-rtl" />
                                    <span class="fw-semibold mt-2 ms-1"> Save 25%</span>
                                </div>
                            </div>
                        </div>
                        <div class="row gy-4 pt-lg-3">
                            <!-- Basic Plan: Start -->
                            @foreach ($plan_pricing_data as $plan_data)
                                <div class="col-xl-4 col-lg-6">


                                    <div class="card   ">
                                        <div class="card-header">
                                            <div class="text-center">
                                                <img src="{{ asset('storage/' . $plan_data->image) ?? '' }}"
                                                    alt="paper airplane icon" class="mb-4 pb-2" />
                                                <h4 class="mb-1">{{ $plan_data->title ?? '' }}</h4>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <span
                                                        class="price-monthly h1 text-primary fw-bold mb-0">${{ $plan_data->monthly_price ?? '' }}</span>
                                                    <span
                                                        class="price-yearly h1 text-primary fw-bold mb-0 d-none">${{ $plan_data->yearly_price ?? '' }}</span>
                                                    <sub class="h6 text-muted mb-0 ms-1">/mo</sub>
                                                </div>
                                                <div class="position-relative pt-2">
                                                    <div class="price-yearly text-muted price-yearly-toggle d-none">$
                                                        {{ $plan_data->total_price ?? '' }} / year</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body">
                                            <ul class="list-unstyled">
                                                @foreach ($plan_data->planLists ?? [] as $first)
                                                    <li>
                                                        <h5>
                                                            <span
                                                                class="badge badge-center rounded-pill bg-label-primary p-0 me-2"><i
                                                                    class="ti ti-check ti-xs"></i></span>
                                                            {{ $first->content_list ?? '' }}
                                                        </h5>
                                                    </li>
                                                @endforeach

                                            </ul>
                                            <div class="d-grid mt-4 pt-3">
                                                <a href="" class="btn btn-label-primary"
                                                    id="plan{{ $plan_data->id }}">{{ $plan_data->text_button ?? '' }}</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endforeach



                        </div>
                    </div>
                </section>

            @endif


        @endif
        <!-- Pricing plans: End -->








        <!-- Useful  Fun Facts : Start -->
        @if ($enter_auth === 'true')
            @if (auth()->check() &&
                    (auth()->user()->role == 'admin' ||
                        (auth()->user()->role == 'user' &&
                            ($subscription && in_array($subscription->plan_name, ['plan 3', 'plan 2'])))))
                @if ($fun_data)
                    <section id="landingFunFacts" class="section-py landing-fun-facts">
                        <div class="container">
                            <div class="row gy-3">

                                @foreach ($fun_data ?? [] as $fun)
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card border {{ $fun['border_color'] }} shadow-none">
                                            <div class="card-body text-center">
                                                <img src="{{ asset('storage/' . $fun['image']) ?? '' }}" alt="laptop"
                                                    class="mb-2" />
                                                <h5 class="h2 mb-1">{{ $fun['event'] }}</h5>
                                                <p class="fw-medium mb-0">
                                                    {{ $fun['title'] }}<br />
                                                    {{ $fun['text'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </section>

                @endif

            @endif
        @else
            @if ($fun_data)
                <section id="landingFunFacts" class="section-py landing-fun-facts">
                    <div class="container">
                        <div class="row gy-3">

                            @foreach ($fun_data ?? [] as $fun)
                                <div class="col-sm-6 col-lg-3">
                                    <div class="card border {{ $fun['border_color'] }} shadow-none">
                                        <div class="card-body text-center">
                                            <img src="{{ asset('storage/' . $fun['image']) ?? '' }}" alt="laptop"
                                                class="mb-2" />
                                            <h5 class="h2 mb-1">{{ $fun['event'] }}</h5>
                                            <p class="fw-medium mb-0">
                                                {{ $fun['title'] }}<br />
                                                {{ $fun['text'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section>



            @endif

        @endif

        <!-- Fun Facts: End -->




        <!-- Useful  faq : Start -->
        @if ($faqs)
            <section id="landingFAQ" class="section-py bg-body landing-faq">
                <div class="container">
                    <div class="text-center mb-3 pb-1">

                        <span class="badge bg-label-primary">{{ $faqs->title ?? '' }}</span>
                    </div>
                    <h3 class="text-center mb-1">{{ $faqs->first_description ?? '' }} <span
                            class="section-title">{{ $faqs->second_description ?? '' }}</span></h3>
                    <p class="text-center mb-5 pb-3">{{ $faqs->tertiary_description ?? '' }}</p>
                    <div class="row gy-5">
                        <div class="col-lg-5">
                            <div class="text-center">
                                <img src="{{ asset('storage/' . $faqs->image) ?? '' }}" alt="faq boy with logos"
                                    class="faq-image" />
                            </div>
                        </div>
                        @if ($faq)
                            <div class="col-lg-7">
                                <div class="accordion" id="accordionExample">
                                    @foreach ($faq ?? [] as $index => $faqsdynamic)
                                        <div class="card accordion-item {{ $index === 0 ? 'active' : '' }}">
                                            <h2 class="accordion-header" id="heading{{ $index }}">
                                                <button type="button" class="accordion-button" data-bs-toggle="collapse"
                                                    data-bs-target="#accordion{{ $index }}" aria-expanded="true"
                                                    aria-controls="accordion{{ $index }}">
                                                    {{ $faqsdynamic['title'] }}
                                                </button>
                                            </h2>

                                            <div id="accordion{{ $index }}"
                                                class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    {{ $faqsdynamic['description'] }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </section>
        @endif
        <!-- faq: End -->









        <!-- Contact Us: Start -->
        @if ($value)
            <section id="landingCTA" class="section-py landing-cta p-lg-0 pb-0">
                <div class="container">
                    <div class="row align-items-center gy-5 gy-lg-0">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h6 class="h2 text-primary fw-bold mb-1">{{ $value->title_cta ?? '' }}</h6>
                            <p class="fw-medium mb-4">{{ $value->description_cta ?? '' }}</p>
                            <a href="#landingPricing"
                                class="btn btn-lg btn-primary">{{ $value->button_text_cta ?? '' }}</a>
                        </div>
                        <div class="col-lg-6 pt-lg-5 text-center text-lg-end">
                            <img src="{{ asset('storage/' . $value->image_cta) ?? '' }}" alt="cta dashboard"
                                class="img-fluid" />
                        </div>
                    </div>
                </div>
            </section>
            <section id="landingContact" class="section-py bg-body landing-contact">
                <div class="container">
                    <div class="text-center mb-3 pb-1">
                        <span class="badge bg-label-primary">{{ $value->title_contact ?? '' }}</span>
                    </div>
                    <h3 class="text-center mb-1"><span
                            class="section-title">{{ $value->first_description_contact ?? '' }}</span>
                        {{ $value->second_description_contact ?? '' }}</h3>
                    <p class="text-center mb-4 mb-lg-5 pb-md-3">{{ $value->tertiary_description_contact ?? '' }}</p>
                    <div class="row gy-4">
                        <div class="col-lg-5">
                            <div class="contact-img-box position-relative border p-2 h-100">
                                <img src="{{ asset('storage/' . $value->image_contact) ?? '' }}"
                                    alt="contact customer service" class="contact-img w-100 scaleX-n1-rtl" />
                                <div class="pt-3 px-4 pb-1">
                                    <div class="row gy-3 gx-md-4">
                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <div class="d-flex align-items-center">
                                                <div class="badge bg-label-primary rounded p-2 me-2"><i
                                                        class="ti ti-mail ti-sm"></i></div>
                                                <div>
                                                    <p class="mb-0">Email</p>
                                                    <h5 class="mb-0">
                                                        <a href="mailto:example@gmail.com"
                                                            class="text-heading">{{ $value->email ?? '' }}</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-12 col-xl-6">
                                            <div class="d-flex align-items-center">
                                                <div class="badge bg-label-success rounded p-2 me-2">
                                                    <i class="ti ti-phone-call ti-sm"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0">Phone</p>
                                                    <h5 class="mb-0"><a href="tel:+1234-568-963"
                                                            class="text-heading">{{ $value->phone ?? '' }}</a></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-1">{{ $value->text_contact ?? '' }}</h4>
                                    <p class="mb-4">
                                        {{ $value->description_contact ?? '' }}<br class="d-none d-lg-block" />
                                        {{ $value->description_contact_two ?? '' }}
                                    </p>
                                    <form class="footer-form" id="contactForm"
                                        action="{{ route('send.message.contact') }}" method="post">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label" for="contact-form-fullname">
                                                    Full Name</label>
                                                <input type="text" class="form-control" id="contact-form-fullname"
                                                    name="full_name" placeholder="john" required />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label" for="contact-form-email">Email</label>
                                                <input type="text" id="contact-form-email" class="form-control"
                                                    placeholder="johndoe@gmail.com" name="email" required />
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="contact-form-message">Message</label>
                                                <textarea id="contact-form-message" class="form-control" name="message" rows="8"
                                                    placeholder="Write a message" required></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary" name="submit">Send
                                                    inquiry</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        <!-- Contact Us: End -->



        <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="subscribeModalLabel">Subscribe Confirmation</h5>

                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to subscribe in this plan ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="proceedButton">Proceed</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


        <script>
            $(document).ready(function() {

                    $('#plan5').on('click', function(e) {
                            e.preventDefault();


                            var selectedPlan1 = "plan 1";


                            @auth
                            @if (auth()->user()->role === 'admin')

                                alert("As an admin, you cannot subscribe to a payment plan.");
                            @else

                                window.location.href = "{{ route('payment-page') }}?plan_id=" + selectedPlan1;
                            @endif
                        @else

                            window.location.href = "{{ route('register') }}?plan_id=" + selectedPlan1;
                        @endauth
                    });


                $('#plan4').on('click', function(e) {
                        e.preventDefault();


                        var selectedPlan2 = "plan 2";


                        @auth
                        @if (auth()->user()->role === 'admin')

                            alert("As an admin, you cannot subscribe to a payment plan.");
                        @else

                            window.location.href = "{{ route('payment-page') }}?plan_id=" + selectedPlan2;
                        @endif
                    @else

                        window.location.href = "{{ route('register') }}?plan_id=" + selectedPlan2;
                    @endauth
                });

            $('#plan6').on('click', function(e) {
            e.preventDefault();


            var selectedPlan3 = "plan 3";


            @auth
            @if (auth()->user()->role === 'admin')

                alert("As an admin, you cannot subscribe to a payment plan.");
            @else

                window.location.href = "{{ route('payment-page') }}?plan_id=" + selectedPlan3;
            @endif
            @else

            window.location.href = "{{ route('register') }}?plan_id=" + selectedPlan3;
            @endauth
            });
            });


            $(document).ready(function() {
                $('#contactForm').submit(function(e) {
                    e.preventDefault();

                    var formData = new FormData(this);

                    $.ajax({
                        type: 'POST',
                        url: $(this).attr('action'),
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            console.log(response);
                            alert("send message Successfuly")

                        },
                        error: function(error) {
                            alert('Error Here when you send the message !');
                            console.error('Error:', error);
                            if (error.responseJSON && error.responseJSON.errors) {
                                displayValidationErrors(error.responseJSON.errors);
                            }
                        }
                    });
                });

                function displayValidationErrors(errors) {

                    $('.validation-errors').remove();


                    $.each(errors, function(field, messages) {
                        var input = $('[name="' + field + '"]');
                        var container = input.closest('.form-control');
                        $.each(messages, function(index, message) {
                            container.append('<p class="text-danger validation-errors">' + message +
                                '</p>');
                        });
                    });
                }
            });
        </script>



    @endsection
