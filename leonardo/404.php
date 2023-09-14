<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package leonardo
 */

get_header();
?>
<div class="notfound career-top talent-desc">

	<h1>404</h1>

	<h3>Coś poszło nie tak <br>strona nie została odnaleziona</h3>

</div>

<style>
	.notfound {
		padding-top: 200px;
		padding-bottom: 100px;
		text-align: center;
	}

	.notfound h2 {
		color: #122440;
		font-weight: 700;
	}

	.notfound h1 {
		font-size: 7vw;
		margin: 0;
	}

	.notfound h3 {
		font-size: 2vw;
	}

	.notfound.career-top {
		background: transparent;
	}

	.notfound.talent-desc {
		height: 76vh;
		width: 100%;
		max-width: 100%;
		;
	}

	@media (max-width: 980px) {
		.notfound h1 {
			font-size: 60px;
		}

		.notfound h3 {
			font-size: 23px;
		}
		.notfound.talent-desc{
			height: auto;
		}
	}
</style>

<?php
get_footer();
