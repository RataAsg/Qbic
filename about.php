<?php /* Template Name: about-page qbic */ ?>
<?php get_header();?>
<!-- For variable Which comes from DATA base, I use ACF. -->
<main role="main" class="about-page">
    <nav class="breadcrumb container m-auto py-4 flex flex-row items-center gap-6">
        <a href="/" class="font-bold text-base">Home</a>
        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M3.7525 1.5L8.25 6.0135L3.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M11.7525 1.5L16.25 6.0135L11.75 10.5" stroke="#778686" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span>About</span>
    </nav>
    <section class="qbic-story container m-auto flex flex-col lg:flex-row gap-16 my-6 lg:my-12">
        <div class="relative hidden lg:block qbic-story_img fadein-out">
            <img src="<?php echo get_the_post_thumbnail_url();?>" class="absolute w-full object-contain object-center first-fade-out">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/about-hover.svg" class="absolute w-full object-contain object-center hidden first-fade-in">
        </div>
        <div class="qbic-story_content flex flex-col gap-8 text-xl lg:text-2xl lg:font-medium">
            <h1 class="text-3xl lg:text-5xl font-bold text-center lg:text-left"><span>Qbic’s </span><span>Story</span></h1>
            <?php the_Content();?>
        </div>
    </section>
    <section class="percent-section container m-auto lg:pt-12 pb-12 lg:pb-24 flex flex-row justify-center items-center gap-5 md:gap-12">
            <div class="flex flex-col gap-5 justify-center">
                <div class="percent flex justify-center items-center font-black text-secondary-500 bg-secondary-100">
                        <span>740</span>
                </div>
                <span class="text-secondary-400 font-semibold text-sm sm:text-2xl lg:text-3xl text-center">Projects</span>
            </div>
            <div class="flex flex-col gap-5 justify-center">
                <div class="percent flex justify-center items-center font-black text-secondary-500 bg-secondary-100">
                        <span>+10k</span>
                </div>
                <span class="text-secondary-400 font-semibold text-sm sm:text-2xl lg:text-3xl text-center">Users</span>
            </div>
            <div class="flex flex-col gap-5 justify-center">
                <div class="percent flex justify-center items-center font-black text-secondary-500 bg-secondary-100">
                        <span>12</span>
                </div>
                <span class="text-secondary-400 font-semibold text-sm sm:text-2xl lg:text-3xl text-center">Data Centers</span>
            </div>
    </section>
    <!-- ACF Group Type-->
    <?php $our_mission = get_field('our_mission');
    $our_mission_title = $our_mission['title'];?>
    <?php if($our_mission):?>
        <section class="our-mission container m-auto flex flex-col items-center gap-8 text-xl lg:text-2xl lg:font-medium">
            <h2 class="text-3xl lg:text-5xl font-bold text-center lg:text-left"><span class="mr-1"><?php echo $our_mission_title['first'];?></span><span><?php echo $our_mission_title['second'];?></span></h2>
            <?php echo $our_mission['content'];?>
        </section>
    <?php endif;?>
    <!-- ACF Group Type-->
    <?php $our_vision = get_field('our_vision');
    $our_vision_title = $our_vision['title'];?>
    <?php if($our_vision):?>
        <section class="our-vision container m-auto flex flex-col items-center gap-8 text-xl lg:text-2xl lg:font-medium my-20">
            <h2 class="text-3xl lg:text-5xl font-bold text-center lg:text-left"><span class="mr-1"><?php echo $our_vision_title['first'];?></span><span><?php echo $our_vision_title['second'];?></span></h2>
            <?php echo $our_vision['content'];?>
        </section>
    <?php endif;?>
    <!-- ACF Group Type-->
    <?php $our_team = get_field('our_team');
    $member_one = $our_team['member_one'];
    $member_two = $our_team['member_two'];
    $member_three = $our_team['member_three'];?>
    <?php if($our_team):?>
        <section class="our-team container m-auto flex flex-col items-center gap-8 text-2xl font-medium">
            <h2 class="text-3xl lg:text-5xl font-bold text-center lg:text-left"><span>Meet the</span><span> Team</span></h2>
            <div class="our-team_detail w-full flex flex-col lg:flex-row justify-center items-center gap-12 lg:gap-20 my-10">
                <div class="flex flex-col">
                    <div class="member-photo member-photo_one-container w-full p-4">
                        <div class="relative w-full">
                            <img src="<?php echo $member_one['photo'];?>" class="w-full object-contain object-center">
                            <div class="member-photo_one w-full h-full absolute"></div>
                        </div>
                    </div>
                    <span class="mt-3 lg:mt-10 text-lg lg:text-2xl font-semibold text-center lg:text-left" style="color:#32363B;"><?php echo $member_one['name'];?></span>
                    <span class="mt-2 lg:mt-3 text-base lg:text-lg text-center lg:text-left" style="color:#778686;"><?php echo $member_one['position'];?></span>
                </div>
                <div class="flex flex-col">
                    <div class="member-photo member-photo_two-container w-full p-4">
                        <div class="relative w-full">
                            <img src="<?php echo $member_two['photo'];?>" class="w-full object-contain object-center">
                            <div class="member-photo_two w-full h-full absolute"></div>
                        </div>
                    </div>
                    <span class="mt-3 lg:mt-10 text-lg lg:text-2xl font-semibold text-center lg:text-left" style="color:#32363B;"><?php echo $member_two['name'];?></span>
                    <span class="mt-2 lg:mt-3 text-base lg:text-lg text-center lg:text-left" style="color:#778686;"><?php echo $member_two['position'];?></span>
                </div>
                <div class="flex flex-col">
                    <div class="member-photo member-photo_three-container w-full p-4">
                        <div class="relative w-full">
                            <img src="<?php echo $member_three['photo'];?>" class="w-full object-contain object-center">
                            <div class="member-photo_three w-full h-full absolute"></div>
                        </div>
                    </div>
                    <span class="mt-3 lg:mt-10 text-lg lg:text-2xl font-semibold text-center lg:text-left" style="color:#32363B;"><?php echo $member_three['name'];?></span>
                    <span class="mt-2 lg:mt-3 text-base lg:text-lg text-center lg:text-left" style="color:#778686;"><?php echo $member_three['position'];?></span>
                </div>
            </div>
        </section>
    <?php endif;?>
    <section class="social-container container m-auto flex flex-col lg:flex-row justify-between items-center gap-5 lg:gap-0 my-10 mb-16 lg:my-24">
        <div class="flex flex-col gap-5 lg:gap-3">
            <div class="title flex flex-row justify-center lg:justify-start items-center text-3xl lg:text-5xl font-bold text-center lg:text-left gap-3"><span>We are</span><span>Social</span></div>
            <span class="subtitle text-base lg:text-xl text-center lg:text-left">Follow us on your favorite social media</span>
        </div>
        <div class="flex items-center gap-5 lg:gap-12">
            <div class="social flex flex-col items-center gap-3">
                <div class="social_icon bg-secondary-100 flex justify-center items-center">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.2635 1.54492H27.7355C32.5483 1.54492 36.4523 5.44572 36.4523 10.2649V27.7369C36.4523 32.5497 32.5515 36.4537 27.7323 36.4537H10.2635C5.44746 36.4537 1.54346 32.5529 1.54346 27.7337V10.2649C1.54346 5.44892 5.44746 1.54492 10.2635 1.54492V1.54492Z" stroke="#3B5454" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M28.5996 9.24023C28.686 9.24023 28.7596 9.31383 28.7596 9.40023C28.7596 9.48983 28.6892 9.56023 28.5996 9.56023" stroke="#3B5454" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.5246 14.476C26.0238 16.9752 26.0238 21.0264 23.5246 23.5256C21.0254 26.0248 16.9742 26.0248 14.475 23.5256C11.9758 21.0264 11.9758 16.9752 14.475 14.476C16.9742 11.9768 21.0254 11.9768 23.5246 14.476Z" stroke="#3B5454" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <span class="text-sm lg:text-lg font-semibold text-secondary-400">Instagram</span>
            </div>
            <div class="social flex flex-col items-center gap-3">
                <div class="social_icon bg-secondary-100 flex justify-center items-center">
                    <svg width="37" height="32" viewBox="0 0 37 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.5297 28.1011L10.7148 18.8313L2.65134 16.3145V16.3145C2.11318 16.1494 1.8107 15.5794 1.97572 15.0413C2.06805 14.7401 2.29442 14.4986 2.58894 14.387L33.2724 2.55181V2.55181C34.0652 2.25043 34.9522 2.64882 35.2536 3.44163C35.3558 3.71059 35.3805 4.00287 35.3247 4.28514L30.1697 28.5795V28.5795C29.9429 29.6587 28.8841 30.3497 27.8048 30.1228C27.5228 30.0635 27.2569 29.9439 27.0255 29.7721L19.7039 24.3641L15.3879 28.5657V28.5657C14.9416 28.9993 14.2283 28.989 13.7947 28.5427C13.6735 28.418 13.5828 28.2668 13.5297 28.1011V28.1011Z" stroke="#3B5454" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <span class="text-sm lg:text-lg font-semibold text-secondary-400">Telegram</span>
            </div>
            <div class="social flex flex-col items-center gap-3">
                <div class="social_icon bg-secondary-100 flex justify-center items-center">
                    <svg width="48" height="47" viewBox="0 0 48 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.5196 16.3036L14.5396 14.5036C13.4308 14.1028 12.2524 14.9068 12.2212 16.0852L12.0964 20.7244C10.87 22.2364 10.1548 23.9932 10.1548 25.8772C10.1548 31.246 14.0236 35.5948 18.898 35.9356C16.7596 39.2236 16.8004 43.114 16.8004 43.114V44.8324C14.3812 43.846 9.78759 41.5492 6.65559 37.3564C4.08279 33.9124 2.40039 29.3068 2.40039 24.4444C2.40039 18.0172 4.86759 12.9436 8.18919 9.35319C12.574 4.61799 18.6076 2.40039 24.0004 2.40039C29.3932 2.40039 35.4268 4.61799 39.8116 9.35319C43.1332 12.9436 45.6004 18.0172 45.6004 24.4444C45.6004 29.3092 43.918 33.9124 41.3452 37.3564C38.2132 41.5492 33.6196 43.846 31.2004 44.8324V43.114C31.2004 43.114 31.2412 39.2236 29.1028 35.9356C33.9772 35.5948 37.846 31.246 37.846 25.8772C37.846 23.9932 37.1284 22.2364 35.9044 20.7244L35.7796 16.0876C35.7484 14.9092 34.57 14.1052 33.4612 14.506L28.4812 16.306C27.0748 15.9532 25.57 15.754 24.0004 15.754C22.4308 15.754 20.926 15.9532 19.5196 16.3036V16.3036Z" stroke="#3B5454" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <span class="text-sm lg:text-lg font-semibold text-secondary-400">GitHub</span>
            </div>
            <div class="social flex flex-col items-center gap-3">
                <div class="social_icon bg-secondary-100 flex justify-center items-center">
                    <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.4004 50.3018C21.4612 50.2922 27.1604 48.3818 27.1604 48.3818C20.7476 41.8986 20.2612 32.2954 25.2404 25.3418C27.602 29.7354 32.0116 33.7866 36.7604 34.9418C36.9428 29.3962 40.706 25.3418 46.3604 25.3418C50.21 25.3418 52.4756 26.8106 54.0404 29.1818H59.8004L55.9604 34.9418" stroke="#3B5454" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <span class="text-sm lg:text-lg font-semibold text-secondary-400">Twitter</span>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>