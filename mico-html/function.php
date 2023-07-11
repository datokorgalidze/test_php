<?php

function categories(){

    $navigation = [
            [
                'link' => "index.php",
                'name' => "Home",
            ],                      
            
            [
                'link' => "about.html",
                'name' => "About",
            ],
            [
                'link' => "treatment.html",
                'name' => "Treatment",
            ],
            [
                'link' => "doctor.html",
                'name' => "Doctors",
            ],
            [
                'link' => "testimonial.html",
                'name' => "Testimonial",
            ],
            [
                'link' => "contact.html",
                'name' => "Contact Us",
            ]    
    ];

    foreach ($navigation as $items){
        echo ' <li class="nav-item">
        <a class="nav-link" href="'.$items['link']   .'"> '.$items['name']   .'</a>
      </li>';
    }

}





function HospitalTreatmentCards() {
    $cards = [
        [
            'image' => "images/t1.png",
            'title' => "Nephrologist Care",
            'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        ],
        [
            'image' => "images/t2.png",
            'title' => " Eye Care",
            'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        ],
        [
            'image' => "images/t3.png",
            'title' => "Pediatrician Clinic",
            'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        ],
        [
            'image' => "images/t4.png",
            'title' => " Parental Care",
            'description' => "Alteration in some form, by injected humour, or randomised words which don't look even slightly e sure there isn't anything",
        ]
    ];

    foreach ($cards as $card) {
        echo '  <div class="col-md-6 col-lg-3">
        <div class="box ">
          <div class="img-box">
            <img src="'.$card['image'] .'" alt="">
          </div>
          <div class="detail-box">
            <h4>
               ' .$card['title']  . '
            </h4>
            <p>
               '. $card['description'] .'
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>';
    }
}



function generateDoctorSlider() {
     
      
    $doctors = [
    [
        'image' => 'images/team1.jpg',
        'name' => 'Henry',
        'degree' => 'MBBS',
        'facebook' => '#',
        'twitter' => '#',
        'linkedin' => '#',
        'instagram' => '#'
    ],
    [
        'image' => 'images/team2.jpg',
        'name' => 'Jenny',
        'degree' => 'MBBS',
        'facebook' => '#',
        'twitter' => '#',
        'linkedin' => '#',
        'instagram' => '#'
    ],
    [
        'image' => 'images/team3.jpg',
        'name' => 'Morco',
        'degree' => 'MBBS',
        'facebook' => '#',
        'twitter' => '#',
        'linkedin' => '#',
        'instagram' => '#'
    ]
    ];
      
    echo '<div class="carousel-wrap">
        <div class="owl-carousel team_carousel">';

    foreach ($doctors as $doctor) {
        echo '<div class="item">
            <div class="box">
                <div class="img-box">
                    <img src="' . $doctor['image'] . '" alt="">
                </div>
                <div class="detail-box">
                    <h5>' . $doctor['name'] . '</h5>
                    <h6>' . $doctor['degree'] . '</h6>
                    <div class="social_box">
                        <a href="' . $doctor['facebook'] . '">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="' . $doctor['twitter'] . '">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="' . $doctor['linkedin'] . '">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="' . $doctor['instagram'] . '">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>';
    }

    echo '</div>
    </div>';
}





$sliderSection = '<section class="slider_section">
    <div class="dot_design">
        <img src="images/dots.png" alt="">
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">';

$carouselControls = '</div>
    <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="images/prev.png" alt="">
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="images/next.png" alt="">
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</section>';


$slides = [
    [
        'heading' => 'Mico',
        'subheading' => 'Hospital',
        'paragraph' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'image' => 'images/slider-img.jpg',
        'link' => '#'
    ],
    [
        'heading' => 'Mico',
        'subheading' => 'Hospital',
        'paragraph' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'image' => 'images/slider-img.jpg',
        'link' => '#'
    ],
    [
        'heading' => 'Mico',
        'subheading' => 'Hospital',
        'paragraph' => 'When looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to',
        'image' => 'images/slider-img.jpg',
        'link' => '#'
    ]
];

function generateSlider($slides, $sliderSection, $carouselControls) {
    echo $sliderSection;

    $active = true;

    foreach ($slides as $index => $slide) {
        echo '<div class="carousel-item' . ($active ? ' active' : '') . '">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="play_btn">
                                <button>
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </button>
                            </div>
                            <h1>
                                ' . $slide['heading'] . ' <br>
                                <span>
                                    ' . $slide['subheading'] . '
                                </span>
                            </h1>
                            <p>
                                ' . $slide['paragraph'] . '
                            </p>
                            <a href="' . $slide['link'] . '">
                                Contact Us
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="' . $slide['image'] . '" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>';

        $active = false;
    }

    echo $carouselControls;
}








