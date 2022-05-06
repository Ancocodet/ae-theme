<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>

<?php do_action( 'tailpress_site_before' ); ?>

<div id="page" class="min-h-screen flex flex-col">

	<?php do_action( 'tailpress_header' ); ?>

	<header class="sticky bg-gray-800">
		<nav x-data="{menu: false}" class="sticky">
			<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
				<div class="relative flex items-center justify-between h-16">
					<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
						<button type="button" @click="menu = !menu" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
							<span class="sr-only">Open main menu</span>
							<svg x-show="!menu" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
							</svg>
							<svg x-show="menu" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true" style="display: none;">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
							</svg>
						</button>
					</div>
					<div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
						<div class="flex-shrink-0 flex items-center">
							<a href="/en/tailwind">
								<img class="block lg:hidden h-8 w-auto" src="https://ancozockt.de/img/frontend/logos/logo-icon.svg" alt="Workflow">
								<img class="hidden lg:block h-8 w-auto" src="https://ancozockt.de/img/frontend/logos/logo.svg">
							</a>
						</div>
						<div class="hidden sm:block sm:ml-6">
							<div class="flex space-x-4">
								<a href="https://ancozockt.de/products" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Products</a>
								<a href="https://ancozockt.de/patchnotes" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Patchnotes</a>
								<a href="https://ancobloggt.de" class="bg-gray-900 text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Blog</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Mobile menu, show/hide based on menu state. -->
			<div x-show="menu" class="sm:hidden" id="mobile-menu" style="display: none;">
				<div class="px-2 pt-2 pb-3 space-y-1">
					<a href="https://ancozockt.de/products" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Products</a>      
					<a href="https://ancozockt.de/patchnotes" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Patchnotes</a>
					<a href="https://ancobloggt.de" class="bg-gray-900 text-white hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Blog</a>
				</div>
			</div>
		</nav>
	</header>

	<div id="content" class="site-content flex-grow">

		<?php do_action( 'tailpress_content_start' ); ?>

		<main>
