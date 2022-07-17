<?php /* Template Name: archive-services qbic */ ?>
<?php get_header();?>
<?php $term = get_queried_object();?>
<!-- For variable Which comes from DATA base, I use ACF. -->
<main role="main" class="archive-services">
    <nav class="breadcrumb container m-auto py-4 flex flex-row items-center gap-6">
        <a href="/" class="font-bold text-base">Home</a>
        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.7525 1.5L8.25 6.0135L3.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.7525 1.5L16.25 6.0135L11.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>Services</span>
    </nav>
    <!-- ACF Group Type-->
    <?php $image = get_field('image', $term);?>
    <?php
	$args = array(
		'post_type'	 => 'services',
		'taxonomy'	 => 'services_category',
		'orderby'	 => 'name',
		'order'  	 => 'ASC',
		'parent' 	 => 0,
		'hide_empty'		 => false,
	);
	$serviceCategories = get_categories($args);?>
    <section class="qbic-services container m-auto flex flex-col items-center my-6">
        <h1 class="text-3xl lg:text-5xl font-bold text-center lg:text-left"><span>Qbic</span><span>’s Services</span></h1>
        <h2 class="text-base lg:text-2xl mt-2">Here you can find all the services we provide.</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 xxl:grid-cols-3 lg:gap-x-20 xxl:gap-x-24 lg:gap-y-8 xxl:gap-y-12 px-12 lg:px-20 xxl:px-32 my-16">
            <?php foreach($serviceCategories as $serviceCategory) {?>
                <?php $serviceCategory_img = get_field('image',$serviceCategory);?>
                <a href="<?php echo get_term_link($serviceCategory);?>" class="service col-span-1 h-full flex flex-col justify-between items-center py-8 px-10 fadein-out">
                    <div class="service_img w-full h-full relative">
                        <img src="<?php echo $serviceCategory_img['first'];?>" class="w-full h-full object-contain object-center absolute bottom-0 left-0 first-fade-out">
                        <img src="<?php echo $serviceCategory_img['second'];?>" class="w-full h-full object-contain object-center absolute bottom-0 left-0 hidden first-fade-in">
                    </div>
                    <span class="name text-2xl font-extrabold mt-5"><?php echo $serviceCategory->name;?></span>
                </a>
            <?php } ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>