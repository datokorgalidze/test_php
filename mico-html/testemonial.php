<?php


function Testimonial() {
    $carouselItems = [
        [
            'name' => 'Morijorch',
            'text' => "Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
        ],
        [
            'name' => 'Rochak',
            'text' => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."
        ],
        [
            'name' => 'Brad Johns',
            'text' => "Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Many web sites still in their infancy. Various editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various"
        ]
    ];
    
    echo '<div class="container px-0">
          <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
          <div class="carousel-inner">';
    
    foreach ($carouselItems as $index => $item) {
        $activeClass = ($index == 0) ? 'active' : '';
        
        echo '<div class="carousel-item ' . $activeClass . '">
              <div class="box">
              <div class="client_info">
              <div class="client_name">
              <h5> ' . $item['name'] . ' </h5>
              <h6>Default model text</h6>
              </div>
              <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>  '. $item['text'] . ' </p>
              </div>
              </div>';
    }
    
    echo '</div> 
          <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
          </a>
          </div>
          </div>
          </div>';
}