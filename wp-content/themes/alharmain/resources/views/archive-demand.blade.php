@extends('layouts.app')

@section('content')
<div class="page-header">
    <div class="container">
        <em class="subtitle">grab Opportunities</em>
        <h1>Are you looking for job abroad ?</h1>
    </div>
</div>
<div class="container">
    <section class="demand__section">
        <header class="demand__header">
            <h2>Total found {{ wp_count_posts('demand')->publish }} job demands</h2>
        </header>
        <div class="demand__list">
            @while(have_posts())
            @php
            the_post();
            $country = '';
            $expiration = get_field('Expiration');
            $terms = get_the_terms(get_the_ID(), 'country');
            $details = get_field('details');
            $totalVacancy = 0;

            if($details) {
            foreach($details as $detail) {
            $totalVacancy += (int) $detail['demand_for_male'] + (int) $detail['demand_for_female'];
            }
            }

            $expirationDate = Carbon\Carbon::createFromFormat('d/m/Y', $expiration);
            foreach ($terms as $term) {
            $country .= $term->name;
            }
            @endphp
            <div class="demand__list__item">
                @if(get_the_post_thumbnail_url())
                <a href="{{ get_the_post_thumbnail_url() }}" class="demand__list__item__image" data-fancybox>
                    <img src="{{ get_the_post_thumbnail_url() }}" alt="{{ the_title() }}">
                </a>
                @endif
                <div class="demand__list__item__detail">
                    <div class="demand__list__item__detail__holder">
                        <div class="demand__list__item__info">
                            <em class="demand__list__item__country">{{ $country }}</em>
                            <time>{{ $expirationDate->format('M d, Y') }}</time>
                        </div>
                        <h2>{!! the_title() !!}</h2>
                        <address>Street 28 Doha, Qatar</address>
                    </div>
                    {{-- <div class="demand__list__item__action">
                        <a href="#" class="btn btn__secondary btn--xs">Enquiry Now</a>
                    </div> --}}
                </div>
                <div class="demand__list__item__meta">
                    <ul>
                        <li>Adv. Permission Date : 2079/11/16</li>
                        <li>Reg. No. : 60197300</li>
                        <li>L.T. No. : 281814</li>
                    </ul>
                    @if($totalVacancy > 0)
                    <span><span class="icon-fire"></span> {{ $totalVacancy }} vacancy</span>
                    @endif
                </div>
                @if($details)
                <div class="demand__list__item__slide">
                    <div class="table__holder">
                        <table>
                            <thead>
                                <tr>
                                    <th>Job Position</th>
                                    <th>Demand <span>Male/Female</span></th>
                                    <th>Monthly Salary</th>
                                    <th>Working <span>Hours/Days</span></th>
                                    <th>Facilities <span>Food / Accommodation</span></th>
                                    <th>Duration <span>Working Period</span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(get_field('details') as $detail)
                                <tr>
                                    <td>{{ get_the_category_by_ID($detail['job_position']) }}</td>
                                    <td>{{ $detail['demand_for_male'] }} / {{ $detail['demand_for_female'] }}</td>
                                    <td>{{ $detail['monthly_salary'] }}</td>
                                    <td>{{ $detail['working']['hour'] }} hr{{ $detail['working']['hour'] > 1 ? 's' : '' }} / {{ $detail['working']['days'] }} day{{ $detail['working']['days'] > 1 ? 's' : '' }}</td>
                                    <td>{{ $detail['facilities']['food'] ? 'Yes' : 'No' }} / {{ $detail['facilities']['accommodation'] ? 'Yes' : 'No' }}</td>
                                    <td>{{ $detail['duration'] }} Yr{{ $detail['duration'] > 1 ? 's' : '' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="holder">
                        <dl>
                            <dt>Note:</dt>
                            <dd>{{ get_field('interview_address') }} {!! get_field('interview_is_headquater') ? '<span>(Head Office)</span>' : '' !!}</dd>
                            <dt class="sr-only">Interview Date</dt>
                            <dd>{{ get_field('interview_date') }} <span>(Interview Date)</span></dd>
                        </dl>
                    </div>
                </div>
                <a href="#" class="demand__list__item__opener">View Demands</a>
                @endif
            </div>
            @endwhile
        </div>
    </section>
</div>
@endsection
