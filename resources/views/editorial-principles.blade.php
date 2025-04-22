@extends('home')

@section('breadcrumb-title', 'Editorial Principles')

@section('main-content')
    <section class="editorial-principles">
        <h1>Editorial Principles</h1>
        <p class="intro-text">
            Editorial principles underpin our platform, providing consistent, accurate, and trustworthy information. From research and analysis to publishing, these principles govern our content development. Our readers trust us to provide transparent, well-researched information to make educated judgments. We follow stringent rules to ensure quality while reviewing casinos, describing industry trends, or giving recommendations. We maintain review integrity and build audience trust and loyalty by following clear editorial criteria.
        </p>
        <button class="show-more-btn" onclick="toggleIntroText()">
            Show more
            <img src="{{ asset('images/arow_down.svg') }}" alt="Expand" class="icon">
        </button>

        <div class="center-wrapper">
        @include('partials.svg-container', ['totalIcons' => 10])

            <div class="text-overlay">
                <span class="text-line">Editorial</span>
                <span class="text-line">Principles</span>
            </div>
            <div class="image-container">
                <img src="{{ asset('images/group.jpg') }}" alt="Team collaborating on editorial principles">
            </div>
        </div>

        <div class="editorial-principles-content">
            <h2>Why Editorial Principles Are Important?</h2>
            <p>
                Editorial principles ensure our writing’s consistency, clarity, honesty, and integrity. Consistency lets readers know what to expect from our platform. From writing tone to analysis depth, we aim for excellence throughout all material. Clarity is also crucial—explaining material clearly, minimizing uncertainty, and making our evaluations accessible to large audiences. We build trust with our readers on honesty. Our readers may trust our material since we fact-check and validate every claim. Our method also emphasizes ethics. We follow copyright, anti-plagiarism, and legal norms in an industry frequently viewed with mistrust. These principles make our helpful information trustworthy and reliable.
            </p>
        </div>
    </section>

    <div class="editorial-text">
        <div class="editorial-content">
            <h2>Where Our Editorial Guidelines Come From</h2>
            <p>
                Established standards and best practices have been carefully combined to create our editing guidelines to assure the greatest content quality. We base these standards on our Privacy Policy, Terms of Use, and Rating standards. We preserve reader privacy by following the Privacy Policy while handling user data and interactions. Our Terms of Use emphasize openness and responsibility in our user interaction. Finally, the Rating Guidelines guide our casino and service reviews, offering a disciplined and objective approach. Our editorial staff applies these principles to every piece of material. We uphold these standards to demonstrate our dedication to quality, honesty, and user pleasure.
            </p>
        </div>
    </div>

    <section class="editorial-guidelines">
        <div class="editorial-guidelines-content">
            <h1>Editorial Team Behind These Guidelines</h1>
            <p>
                We prioritize quality and accuracy because of our editorial team. Our staff of professional researchers and specialists is knowledgeable and skilled. Each member is well-versed in gaming and online casinos. Our insights are factual and informed by industry trends and practices. Our team members go beyond technical knowledge to ensure the content matches our goals and values. They share their ideas publicly when appropriate, enhancing our transparency and accountability. Our visitors receive insightful and trustworthy information because we hire only the best and brightest.
            </p>
        </div>
        <div class="editorial-team-image">
            <img src="{{ asset('images/people.png') }}" alt="Editorial team collaborating">
        </div>
    </section>
@endsection
