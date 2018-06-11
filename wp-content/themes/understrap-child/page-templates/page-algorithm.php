<?php
/**
 * Template Name: HCP Algorithm Page
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );

global $theme;
?>

<div class="wrapper hcp-title" id="full-width-page-wrapper">

	<div class="content-area" id="primary">

		<main class="site-main entry-content <?=$theme?>-theme" id="main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="row">
						<div class="col">
							<?php the_field('sa'); ?>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<figure class="algorithm">
								<h2>Serological Testing</h2>
								<div class="base full blue-border">
									<div>ANTI-HCV ANTIBODY Single RDT or laboratory-based immunoassay</div>
								</div>
								<div class="vertical-line"></div>
								<div class="split-unite-lines"></div>
								<div class="base half-left blue-bg">
									<div>Anti-HCV + (reactive) Report positive</div>
								</div>
								<div class="base half-right blue-bg">
									<div>Anti-HCV - (non-reactive) Report negative</div>
								</div>
								<div class="split-lines"></div>
								<div class="base half-left grey-bg">
									<div>Compatible with current or past HCV infection</div>
								</div>
								<div class="base half-right grey-bg">
									<div>No serological evidence of HCV infection</div>
								</div>
								<div class="down-arrow"></div>

								<h2>Confirmation of Viraemic Infection</h2>
								<div class="base full blue-border">
									<div>HCV RNA NUCLEIC ACID TEST (NAT)</div>
									<div class="small-text">(qualitative or quantitative) or HCV core antigen (cAg)</div>
								</div>
								<div class="vertical-line"></div>
								<div class="split-unite-lines"></div>
								<div class="base half-left blue-bg">
									<div>HCV RNA test or cAg + Report detected</div>
									<div class="small-text">(with viral load if available)</div>
								</div>
								<div class="base half-right blue-bg">
									<div>HCV RNA test or cAg - Report not detected</div>
									<br>
								</div>
								<div class="split-lines"></div>
								<div class="base half-left grey-bg">
									<div>Compatible with viraemic HCV infection</div>
								</div>
								<div class="base half-right grey-bg">
									<div>No current viraemic HCV</div>
								</div>
								<div class="down-arrow"></div>

								<h2>Treatment Assessment</h2>
								<div class="same-height-row">
									<div class="long-left">
										<div class="base-left full blue-border" id="first-box">
											<div>ASSESSMENT OF STAGE OF LIVER DISEASE</div>
											<div class="small-text">(Using clinical criteria and non-invasive tests (NITs), i.e. APRI score > 2 or based on TE)</div>
											<br>
											<div>OTHER CONSIDERATIONS FOR TREATMENT</div>
											<div class="small-text">(e.g. comorbidities, HCV genotyping, pregnancy, and potential drug-drug interactions)</div>
										</div>
										<div class="vertical-line"></div>
										<div class="base-left full blue-border">
											<div>SELECT DIRECT-ACTING ANTIVIRAL (DAA) REGIMEN</div>
											<div class="small-text">Daclatasvir/sofosbuvir or ledipasvir/sofosbuvir &plusmn; ribavirin for 12 or 24 weeks</div>
											<div class="small-text">(depending on genotype and presence of cirrhosis)</div>
										</div>
									</div>
									<div class="right-arrow"></div>
									<div class="long-right red-border">
										<div class="base-left full">
											<div class="red-text">Factors to be considered in prioritizing treatment</div>
											<ol class="small-text">
												<li>Increased risk of death <span class="unbold-text">(e.g. advanced fibrosis and cirrhosis, post-liver transplantation)</span></li>
												<li>Risk of accelerated fibrosis <span class="unbold-text">(e.g. HIV or HBV coinfection, metabolic syndrome, high level of alcohol use).</span></li>
												<li>Extrahepatic manifestations and evidence of end-organ damage <span class="unbold-text">(e.g. debilitating fatigue, vasculitis and lymphoproliferative disorders)</span></li>
												<li>Significant psychosocial morbidity <span class="unbold-text">(e.g. due to stigma, discrimination, fear of transmission to others.</span></li>
												<li>Maximizing reduction in incidence <span class="unbold-text">(e.g. in PWID, MSM, prisoners, sex workers, women of childbearing age, health-care workers)</span></li>
											</ol>
										</div>
									</div>
								</div>
								<div class="down-arrow"></div>
								<h2>Monitoring</h2>
								<div class="base full blue-border">
									<div>ASSESSMENT OF CURE</div>
									<div class="small-text">(SUSTAINED VIROLOGICAL RESPONSE (SVR) AT 12 WEEKS (I.E. SVR12) AFTER THE END OF TREATMENT)</div>
									<div class="grey-text small-text">HCV RNA NAT (QUALITATIVE OR QUANTITATIVE)</div>
								</div>
								<br>
								<div class="base full blue-border">
									<div>DETECTION OF HCC</div>
									<div class="small-text">IN PERSONS WITH CIRRHOSIS (EVERY 6 MONTH)</div>
									<div class="grey-text small-text">ULTRASOUND AND AFP</div>
								</div>
							</figure>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<?php the_field('abb'); ?>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #primary -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
