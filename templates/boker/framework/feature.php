<?php
/**
 * Boker Template Framework - Feature Section
 * 
 * @package     Joomla.Site
 * @subpackage  Templates.Boker.Framework
 * @copyright   Copyright (C) Globbersthemes. All rights reserved.
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;

// Section modules columns
$feature_a = $this->countModules('feature1');
$feature_b = $this->countModules('feature2');
$feature_c = $this->countModules('feature3');
$feature_d = $this->countModules('feature4');

// Columns layout
$feature_four_columns_layout = $this->params->get('feature_four_columns_layout', '3,3,3,3');
$feature_three_columns_layout = $this->params->get('feature_three_columns_layout', '4,4,4');
$feature_two_columns_layout = $this->params->get('feature_two_columns_layout', '6,6');

// Helper function to determine grid classes for 4 columns
function getFeatureGrid4Col($layout, $position)
{
	$layouts = [
		'2,2,2,6' => ['grid_2', 'grid_2', 'grid_2', 'grid_6'],
		'2,2,3,5' => ['grid_2', 'grid_2', 'grid_3', 'grid_5'],
		'2,2,4,4' => ['grid_2', 'grid_2', 'grid_4', 'grid_4'],
		'2,2,5,3' => ['grid_2', 'grid_2', 'grid_5', 'grid_3'],
		'2,2,6,2' => ['grid_2', 'grid_2', 'grid_6', 'grid_2'],
		'2,3,2,5' => ['grid_2', 'grid_3', 'grid_2', 'grid_5'],
		'2,3,3,4' => ['grid_2', 'grid_3', 'grid_3', 'grid_4'],
		'2,3,4,3' => ['grid_2', 'grid_3', 'grid_4', 'grid_3'],
		'2,3,5,2' => ['grid_2', 'grid_3', 'grid_5', 'grid_2'],
		'2,4,2,4' => ['grid_2', 'grid_4', 'grid_2', 'grid_4'],
		'2,4,3,3' => ['grid_2', 'grid_4', 'grid_3', 'grid_3'],
		'2,4,4,2' => ['grid_2', 'grid_4', 'grid_4', 'grid_2'],
		'2,5,2,3' => ['grid_2', 'grid_5', 'grid_2', 'grid_3'],
		'2,5,3,2' => ['grid_2', 'grid_5', 'grid_3', 'grid_2'],
		'2,6,2,2' => ['grid_2', 'grid_6', 'grid_2', 'grid_2'],
		'3,2,2,5' => ['grid_3', 'grid_2', 'grid_2', 'grid_5'],
		'3,2,3,4' => ['grid_3', 'grid_2', 'grid_3', 'grid_4'],
		'3,2,5,2' => ['grid_3', 'grid_2', 'grid_5', 'grid_2'],
		'3,3,2,4' => ['grid_3', 'grid_3', 'grid_2', 'grid_4'],
		'3,3,3,3' => ['grid_3', 'grid_3', 'grid_3', 'grid_3'],
		'3,3,4,2' => ['grid_3', 'grid_3', 'grid_4', 'grid_2'],
		'3,4,2,3' => ['grid_3', 'grid_4', 'grid_2', 'grid_3'],
		'3,4,3,2' => ['grid_3', 'grid_4', 'grid_3', 'grid_2'],
		'3,5,2,2' => ['grid_3', 'grid_5', 'grid_2', 'grid_2'],
		'4,2,2,4' => ['grid_4', 'grid_2', 'grid_2', 'grid_4'],
		'4,2,3,3' => ['grid_4', 'grid_2', 'grid_3', 'grid_3'],
		'4,2,4,2' => ['grid_4', 'grid_2', 'grid_4', 'grid_2'],
		'4,3,2,3' => ['grid_4', 'grid_3', 'grid_2', 'grid_3'],
		'4,3,3,2' => ['grid_4', 'grid_3', 'grid_3', 'grid_2'],
		'4,4,2,2' => ['grid_4', 'grid_4', 'grid_2', 'grid_2'],
		'5,2,2,3' => ['grid_5', 'grid_2', 'grid_2', 'grid_3'],
		'5,2,3,2' => ['grid_5', 'grid_2', 'grid_3', 'grid_2'],
		'5,3,2,2' => ['grid_5', 'grid_3', 'grid_2', 'grid_2'],
		'6,2,2,2' => ['grid_6', 'grid_2', 'grid_2', 'grid_2'],
	];
	
	if (isset($layouts[$layout])) {
		return $layouts[$layout][$position] ?? 'grid_3';
	}
	return 'grid_3';
}

// Helper function to determine grid classes for 3 columns
function getFeatureGrid3Col($layout, $position)
{
	$layouts = [
		'2,2,8' => ['grid_2', 'grid_2', 'grid_8'],
		'2,3,7' => ['grid_2', 'grid_3', 'grid_7'],
		'2,4,6' => ['grid_2', 'grid_4', 'grid_6'],
		'2,5,5' => ['grid_2', 'grid_5', 'grid_5'],
		'2,6,4' => ['grid_2', 'grid_6', 'grid_4'],
		'2,7,3' => ['grid_2', 'grid_7', 'grid_3'],
		'2,8,2' => ['grid_2', 'grid_8', 'grid_2'],
		'3,2,7' => ['grid_3', 'grid_2', 'grid_7'],
		'3,3,6' => ['grid_3', 'grid_3', 'grid_6'],
		'3,4,5' => ['grid_3', 'grid_4', 'grid_5'],
		'3,5,4' => ['grid_3', 'grid_5', 'grid_4'],
		'3,6,3' => ['grid_3', 'grid_6', 'grid_3'],
		'3,7,2' => ['grid_3', 'grid_7', 'grid_2'],
		'4,2,6' => ['grid_4', 'grid_2', 'grid_6'],
		'4,3,5' => ['grid_4', 'grid_3', 'grid_5'],
		'4,4,4' => ['grid_4', 'grid_4', 'grid_4'],
		'4,5,3' => ['grid_4', 'grid_5', 'grid_3'],
		'4,6,2' => ['grid_4', 'grid_6', 'grid_2'],
		'5,2,5' => ['grid_5', 'grid_2', 'grid_5'],
		'5,3,4' => ['grid_5', 'grid_3', 'grid_4'],
		'5,4,3' => ['grid_5', 'grid_4', 'grid_3'],
		'5,5,2' => ['grid_5', 'grid_5', 'grid_2'],
		'6,2,4' => ['grid_6', 'grid_2', 'grid_4'],
		'6,3,3' => ['grid_6', 'grid_3', 'grid_3'],
		'6,4,2' => ['grid_6', 'grid_4', 'grid_2'],
		'7,2,3' => ['grid_7', 'grid_2', 'grid_3'],
		'7,3,2' => ['grid_7', 'grid_3', 'grid_2'],
		'8,2,2' => ['grid_8', 'grid_2', 'grid_2'],
	];
	
	if (isset($layouts[$layout])) {
		return $layouts[$layout][$position] ?? 'grid_4';
	}
	return 'grid_4';
}

// Helper function to determine grid classes for 2 columns
function getFeatureGrid2Col($layout, $position)
{
	$layouts = [
		'2,10' => ['grid_2', 'grid_10'],
		'3,9' => ['grid_3', 'grid_9'],
		'4,8' => ['grid_4', 'grid_8'],
		'5,7' => ['grid_5', 'grid_7'],
		'6,6' => ['grid_6', 'grid_6'],
		'7,5' => ['grid_7', 'grid_5'],
		'8,4' => ['grid_8', 'grid_4'],
		'9,3' => ['grid_9', 'grid_3'],
		'10,2' => ['grid_10', 'grid_2'],
	];
	
	if (isset($layouts[$layout])) {
		return $layouts[$layout][$position] ?? 'grid_6';
	}
	return 'grid_6';
}

// Get grid classes based on active modules
$grid_4col_1 = getFeatureGrid4Col($feature_four_columns_layout, 0);
$grid_4col_2 = getFeatureGrid4Col($feature_four_columns_layout, 1);
$grid_4col_3 = getFeatureGrid4Col($feature_four_columns_layout, 2);
$grid_4col_4 = getFeatureGrid4Col($feature_four_columns_layout, 3);

$grid_3col_1 = getFeatureGrid3Col($feature_three_columns_layout, 0);
$grid_3col_2 = getFeatureGrid3Col($feature_three_columns_layout, 1);
$grid_3col_3 = getFeatureGrid3Col($feature_three_columns_layout, 2);

$grid_2col_1 = getFeatureGrid2Col($feature_two_columns_layout, 0);
$grid_2col_2 = getFeatureGrid2Col($feature_two_columns_layout, 1);

if ($feature_a || $feature_b || $feature_c || $feature_d) {
	// Framework file continues...
}

?>

<div id="feature">
<!-- start feature -->
	<?php /*four columns modules*/ 
		if ($feature_a && $feature_b && $feature_c && $feature_d) { ?>	
            <div class="container_12">
			<div class="<?php echo $grid_4col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_4col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_4col_3; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			<div class="<?php echo $grid_4col_4; ?>" data-scrollReveal="enter from the top after 0.8s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php
		}
		elseif (!$feature_a && $feature_b && $feature_c && $feature_d) { ?>	
            <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && !$feature_b && $feature_c && $feature_d) { ?>	
            <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && $feature_b && !$feature_c && $feature_d) { ?>	
            <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && $feature_b && $feature_c && !$feature_d) { ?>	
            <div class="container_12">
			<div class="<?php echo $grid_3col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_3col_3; ?>" data-scrollReveal="enter from the top after 0.6s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && $feature_b && $feature_c && $feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && $feature_b && $feature_c && $feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && $feature_b && $feature_c && $feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && $feature_b && !$feature_c && !$feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && !$feature_b && !$feature_c && $feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif ($feature_a && !$feature_b && $feature_c && !$feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif (!$feature_a && $feature_b && !$feature_c && $feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif (!$feature_a && $feature_b && $feature_c && !$feature_d) { ?>
			<div class="container_12">
			<div class="<?php echo $grid_2col_1; ?>" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			<div class="<?php echo $grid_2col_2; ?>" data-scrollReveal="enter from the top after 0.4s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		
		<?php /*one column modules*/
		}
		elseif ($feature_a && !$feature_b && !$feature_c && !$feature_d) { ?>
			<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature1" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif (!$feature_a && $feature_b && !$feature_c && !$feature_d) { ?>
			<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature2" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif (!$feature_a && !$feature_b && $feature_c && !$feature_d) { ?>
			<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature3" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		elseif (!$feature_a && !$feature_b && !$feature_c && $feature_d) { ?>
			<div class="container_12">
			<div class="grid_12" data-scrollReveal="enter from the top after 0.2s ease-out"><div class="block"><jdoc:include type="modules" name="feature4" style="xhtml" /></div></div>
			</div>
			
		<?php 
		}
		
		<style type="text/css">
             #feature .container_12 {
	         text-align:<?php echo $this->params->get('feature_text_align','left') ?>;
	     }

        </style>

</div>
