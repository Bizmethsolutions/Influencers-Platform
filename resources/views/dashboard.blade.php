@extends('layout.master')
@section('content')

  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>
             Ecommerce</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item">Dashboard</li>
            <li class="breadcrumb-item active">Ecommerce</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="row size-column">
      <div class="col-xl-7 box-col-12 xl-100">
        <div class="row dash-chart">
          <div class="col-xl-6 box-col-6 col-md-6">
            <div class="card o-hidden">
              <div class="card-header card-no-border">
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li><i class="fa fa-spin fa-cog"></i></li>
                    <li><i class="view-html fa fa-code"></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
                </div>
                <div class="media">
                  <div class="media-body">
                    <p><span class="f-w-500 font-roboto">Today Total sale</span><span class="f-w-700 font-primary ms-2">89.21%</span></p>
                    <h4 class="f-w-500 mb-0 f-20">$<span class="counter">3000.56</span></h4>
                  </div>
                </div>
              </div>
              <div class="card-body p-0">
                <div class="media">
                  <div class="media-body">
                    <div class="profit-card">
                      <div id="spaline-chart"></div>
                    </div>
                  </div>
                </div>
                <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
                  &lt;div class=&quot;card o-hidden&quot;&gt;
                  &lt;div class=&quot;card-header card-no-border&quot;&gt;
                  &lt;div class=&quot;card-header-right&quot;&gt;
                  &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                  &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                  &lt;/ul&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;media&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;
                  &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total sale&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;79.21%&lt;/span&gt;&lt;/p&gt;
                  &lt;h4 class=&quot;f-w-500 mb-0 f-20&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;3465.56&lt;/span&gt;&lt;/h4&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;card-body p-0&quot;&gt;
                  &lt;div class=&quot;media&quot;&gt;
                  &lt;div class=&quot;media-body&quot;&gt;
                  &lt;div class=&quot;profit-card&quot;&gt;
                    &lt;div id=&quot;spaline-chart&quot;&gt;&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;!-- Cod Box Copy end --&gt; </code></pre>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 box-col-6 col-md-6">
            <div class="card o-hidden">
              <div class="card-header card-no-border">
                <div class="card-header-right">
                  <ul class="list-unstyled card-option">
                    <li><i class="fa fa-spin fa-cog"></i></li>
                    <li><i class="view-html fa fa-code"></i></li>
                    <li><i class="icofont icofont-maximize full-card"></i></li>
                    <li><i class="icofont icofont-minus minimize-card"></i></li>
                    <li><i class="icofont icofont-refresh reload-card"></i></li>
                    <li><i class="icofont icofont-error close-card"></i></li>
                  </ul>
                </div>
                <div class="media">
                  <div class="media-body">
                    <p><span class="f-w-500 font-roboto">Today Total visits</span><span class="f-w-700 font-primary ms-2">35.00%</span></p>
                    <h4 class="f-w-500 mb-0 f-20 counter">9,050</h4>
                  </div>
                </div>
              </div>
              <div class="card-body pt-0">
                <div class="monthly-visit">
                  <div id="column-chart"></div>
                </div>
                <div class="code-box-copy">
                  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
                  <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
                    &lt;div class=&quot;card o-hidden&quot;&gt;
                    &lt;div class=&quot;card-header card-no-border&quot;&gt;
                    &lt;div class=&quot;card-header-right&quot;&gt;
                    &lt;ul class=&quot;list-unstyled card-option&quot;&gt;
                    &lt;li&gt;&lt;i class=&quot;fa fa-spin fa-cog&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;i class=&quot;view-html fa fa-code&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;i class=&quot;icofont icofont-maximize full-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;i class=&quot;icofont icofont-minus minimize-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;i class=&quot;icofont icofont-refresh reload-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;i class=&quot;icofont icofont-error close-card&quot;&gt;&lt;/i&gt;&lt;/li&gt;
                    &lt;/ul&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;media&quot;&gt;
                    &lt;div class=&quot;media-body&quot;&gt;
                    &lt;p&gt;&lt;span class=&quot;f-w-500 font-roboto&quot;&gt;Month Total visits&lt;/span&gt;&lt;span class=&quot;f-w-700 font-primary ml-2&quot;&gt;95.56%&lt;/span&gt;&lt;/p&gt;
                    &lt;h4 class=&quot;f-w-500 mb-0 f-20&quot;&gt;$&lt;span class=&quot;counter&quot;&gt;5,953&lt;/span&gt;&lt;/h4&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class=&quot;card-body pt-0&quot;&gt;
                    &lt;div class=&quot;monthly-visit&quot;&gt;
                    &lt;div id=&quot;column-chart&quot;&gt;&lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;!-- Cod Box Copy end --&gt;</code></pre>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
@endsection

{{-- @push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush --}}