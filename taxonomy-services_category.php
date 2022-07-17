<?php /* Template Name: taxonomy-services_category qbic */ ?>
<?php get_header();?>
<?php $term = get_queried_object();?>
<?php $image_term = get_field('image', $term);?>
<!-- For variable Which comes from DATA base, I use ACF. -->
<main role="main" class="services_category">
    <nav class="breadcrumb container m-auto py-4 flex flex-row items-center gap-6">
        <a href="/" class="font-bold text-base">Home</a>
        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.7525 1.5L8.25 6.0135L3.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.7525 1.5L16.25 6.0135L11.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <a href="/services/" class="font-bold text-base">Services</a>
        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.7525 1.5L8.25 6.0135L3.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.7525 1.5L16.25 6.0135L11.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span><?php echo $term->name;?></span>
    </nav>
    <!-- ACF Group Type-->
    <section class="services_category_content container m-auto w-3/5 flex flex-col items-center my-6">
        <img src="<?php echo $image_term['first'];?>" class="object-contain object-center">
        <h1 class="font-bold text-5xl mt-6"><?php echo $term->name;?></h1>
        <div class="text-center text-2xl mt-6"><?php echo category_description();?></div>
    </section>
    <?php
	$services_category_products = new WP_Query(array(
		'post_type'	 => 'services',
		'orderby'	 => 'name',
		'order'  	 => 'ASC',
		'parent' 	 => 0,
		'hide_empty'		 => false,
        'tax_query' => array(
            array(
                'taxonomy' => 'services_category',
                'field' => 'slug',
                'terms' => $term->name
            )
    )));?>
    <?php if($services_category_products->have_posts()):?>
        <div class="container m-auto services_category-products_nav w-3/5 flex flex-row items-center my-16">
            <?php while($services_category_products->have_posts()):$services_category_products->the_post();?>
                <div id="service-<?php echo get_the_ID();?>" class="nav-list w-1/4 flex justify-center items-center text-2xl py-6">
                    <span class="cursor-pointer"><?php echo get_the_title();?></span>
                </div>
            <?php endwhile;?>
        </div>
        <section class="services_category-products container m-auto w-4/5 flex flex-col items-center my-16">
            <?php while($services_category_products->have_posts()):$services_category_products->the_post();?>
                <div class="service-<?php echo get_the_ID();?> services_category-products_post w-full flex-col">
                    <h2 class="font-bold text-4xl"><?php echo get_the_title();?></h2>
                    <div class="font-medium text-2xl mt-6"><?php the_content();?></div>
                    <?php if(have_rows('second_section')):?>
                        <h3 class="font-semibold text-3xl mt-16"><?php echo get_field('second_section_title');?></h3>
                        <div class="w-full grid grid-cols-1 lg:grid-cols-2 xxl:grid-cols-3 gap-x-10 gap-y-6 xxl:gap-x-16 xxl:gap-y-10 mt-12">
                            <?php while(have_rows('second_section')):the_row();
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                            $img = get_sub_field('image');?>
                                <div class="col-span-1 flex flex-col items-center">
                                    <div class="w-35 h-35 rounded-full bg-secondary-100 flex justify-center items-center">
                                        <img src="<?php echo $img;?>" class="object-contain object-center">
                                    </div>
                                    <span class="text-2xl text-secondary-400 font-bold mt-8"><?php echo $title;?></span>
                                    <div class="text-xl text-secondary-400 mt-4 text-center"><?php echo $content;?></div>
                                </div>
                            <?php endwhile;?>
                        </div>
                    <?php endif;?>
                    <?php if(have_rows('third_section')):?>
                        <h3 class="font-semibold text-3xl mt-16">Plans & Pricing</h3>
                        <p class="font-medium text-2xl mt-3">You can select your desired Bare metal plan among these.</p>
                        <div  class="relative w-full my-12">
                            <div class="pricing-section-slider slider-service-<?php echo get_the_ID();?> w-4/5 swiper-container">
                                <div class="swiper-wrapper my-12">
                                    <?php while(have_rows('third_section')):the_row();
                                    $title = get_sub_field('title');
                                    $content = get_sub_field('content');?>
                                        <div class="swiper-slide w-full flex flex-col items-center p-2">
                                            <div class="w-full swiper-slide_title flex justify-center items-center gap-1 text-4xl font-bold"><span><?php echo $title;?></span><span class="text-2xl font-normal">/mon</span></div>
                                            <div class="swiper-slide_content w-full h-full flex flex-col justify-between">
                                                <div class="w-full flex flex-row justify-between items-center px-4 py-3 border-b border-secondary-100">
                                                    <span class="value font-bold text-xl"><?php echo $content['cores'];?></span>
                                                    <span class="title text-sm">Cores</span>
                                                </div>
                                                <div class="w-full flex flex-row justify-between items-center px-4 py-3 border-b border-secondary-100">
                                                    <span class="value font-bold text-xl"><?php echo $content['threads'];?></span>
                                                    <span class="title text-sm">Threads</span>
                                                </div>
                                                <div class="w-full flex flex-row justify-between items-center px-4 py-3">
                                                    <span class="value font-bold text-xl"><?php echo $content['ghz'];?></span>
                                                    <span class="title text-sm">GHz</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile;?>
                                </div>
                            </div>
                            <div class="swiper-button-next btn-next-service-<?php echo get_the_ID();?>">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.33331 11L6.33331 6L1.33331 1" stroke="#B5CCCC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="swiper-button-prev btn-prev-service-<?php echo get_the_ID();?>">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.66663 1L1.66663 6L6.66663 11" stroke="#B5CCCC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                    <?php endif;?>
                    <section class="contact-notice w-full px-24 py-10 flex justify-center items-center gap-4">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.96798 36.784L27.0184 62.018C29.6423 64.6612 33.8958 64.6612 36.5164 62.0146L61.5634 36.784C64.1874 34.1408 64.1874 29.8562 61.5634 27.213L36.5164 1.9824C33.8924 -0.660801 29.639 -0.660801 27.015 1.9824L1.96798 27.213C-0.655993 29.8562 -0.655993 34.1408 1.96798 36.784ZM28.4999 36.3063V37.4892H33.6934V36.3187C33.719 34.776 33.9322 33.8029 34.3249 33.073C34.7111 32.3551 35.3316 31.76 36.4031 31.0914C38.9686 29.5337 40.5579 27.2127 40.5579 23.9235C40.5579 21.6273 39.7115 19.5881 38.1693 18.1261C36.6296 16.6664 34.4651 15.8457 31.9351 15.8457C29.6049 15.8457 27.4523 16.5641 25.8418 17.9577C24.2203 19.3607 23.2136 21.3935 23.1037 23.8785L23.0565 24.9456H28.3903L28.4513 23.9884C28.5339 22.6915 29.0146 21.8793 29.6094 21.3805C30.2229 20.8659 31.0516 20.6076 31.9351 20.6076C33.9335 20.6076 35.3644 21.8664 35.3644 23.7668C35.3644 25.3904 34.4522 26.5891 33.1325 27.3879C31.8086 28.1896 30.605 29.0644 29.7644 30.4818C28.9269 31.8939 28.5204 33.7208 28.5 36.3023L28.4999 36.3063ZM31.2015 45.2244C33.0643 45.2244 34.5842 43.7085 34.5842 41.8504C34.5842 39.9924 33.0643 38.4765 31.2015 38.4765C29.3386 38.4765 27.8187 39.9924 27.8187 41.8504C27.8187 43.7085 29.3386 45.2244 31.2015 45.2244Z" fill="url(#paint0_linear_5200_87000)"/>
                            <defs>
                            <linearGradient id="paint0_linear_5200_87000" x1="54.2664" y1="64" x2="-9.99657" y2="0.47227" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#FF2255"/>
                            <stop offset="1" stop-color="#80112B" stop-opacity="0"/>
                            </linearGradient>
                            </defs>
                        </svg>
                        <p class="font-medium text-2xl">If you have any question regarding this service, visit our <a class="text-secondary-400 border-b border-secondary-400">FAQ</a> or <a class="text-secondary-400 border-b border-secondary-400">Contact Us</a>.</p>
                    </section>
                </div>
            <?php endwhile;?>
        </section>
    <?php endif;?>
</main>
<?php get_footer(); ?>