<div class="container">
				<div class="row">

					<div class="sec-title text-center wow animated fadeInDown">
						<h2>SERTİFİKALARIMIZ</h2>
					</div>


					<ul class="project-wrapper wow animated fadeInUp">
						@foreach($portfolio as $prt)
                        <li class="portfolio-item">
							<img src="{{ $prt['images'] }}" class="img-border img-responsive" alt="">
							<ul class="external">
									<li><a class="fancybox" title="" data-fancybox-group="works" href="{{$prt['images']}}"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
							</ul>

						</li>
                        @endforeach

						
						{{-- <li class="portfolio-item">
							<img src="img/portfolio/2.jpg" class="img-border img-responsive" alt="yyyyyyyyyyyLorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
							<figcaption class="mask">
								<h3>Soğutma Sistemleri</h3>
								
							</figcaption>
							<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/2.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>

						</li>

						<li class="portfolio-item">
							<img src="img/portfolio/3.jpg" class="img-border img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry. ">
							<figcaption class="mask">
								<h3>Soğutma Sistemleri</h3>
								
							</figcaption>
							<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/3.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>

						</li>

						<li class="portfolio-item">
							<img src="img/portfolio/4.jpg" class="img-border img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
							<figcaption class="mask">
								<h3>Soğutma Sistemleri</h3>
								
							</figcaption>
							<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/4.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
						</li>
						
						<li class="portfolio-item">
							<img src="img/portfolio/5.jpg" class="img-border img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
							<figcaption class="mask">
								<h3>Soğutma Sistemleri</h3>
								
							</figcaption>
							<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/5.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
						</li>
						
						<li class="portfolio-item">
							<img src="img/portfolio/6.jpg" class="img-border img-responsive" alt="Lorem Ipsum is simply dummy text of the printing and typesetting ndustry.">
							<figcaption class="mask">
								<h3>Soğutma Sistemleri</h3>
								
							</figcaption>
							<ul class="external">
									<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="img/portfolio/6.jpg"><i class="fa fa-search"></i></a></li>
									<li><a href=""><i class="fa fa-link"></i></a></li>
								</ul>
						</li>	 --}}

					</ul>

				</div>
			</div>