<?php
/*
Plugin Name: ShahadatMasoom
Plugin URI: http://www.pluginha.com
Version: 1.0
Author: Morteza
Description: نمایش تصادفی بیش از هزاران پیامک به مناسبت شهادت ائمه معوصومین علیه السلام.
License: GPL v2 - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
License:
 ==============================================================================
 Copyright 2014-2015 pluginha  (email : mortezanano@gmail.com)

 This program is free software; you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation; either version 2 of the License, or
 (at your option) any later version.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
defined('ABSPATH') or die('&lt;h3&gt;Access denied!');
define('ShahadatMasoom_ver','1.0');
define('ShahadatMasoom_dir',dirname(__FILE__));
define ('ShahadatMasoom_uri', get_option('siteurl').'/wp-content/plugins/ShahadatMasoom');

function random_prophet_sh_display($args) {
	extract($args);
   echo $before_widget;
   echo $before_title . "پیامک رحلت حضرت محمد (ص)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/prophet_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));

	echo "<p id='quotes'>$quotes[$num]</p>";

	wp_register_style( 'style', plugins_url('style.css', __FILE__) );
	wp_enqueue_style( 'style' );
    
}

wp_register_sidebar_widget(
    'random_prophet_sh_1',        
    'پيامک هاي رحلت حضرت محمد (ص)',           
    'random_prophet_sh_display',   
    array(                   
        'description' => ' نمایش پیامک های تصادفی به مناسبت رحلت پیامبر اکرم حضرت محمد صلوات الله علیه و آله وسلم'
    )
);

function random_imam_ali_sh_display($args) {

   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک های شهادت امام علی (ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_ali_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";

    
}
wp_register_sidebar_widget(
    'random_imam_ali_sh_1',         
    'پیامک های شهادت امام علی (ع)',          
    'random_imam_ali_sh_display',   
    array(                  
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امیر المومنین علی علیه السلام'
    )
);

function random_kosar_sh_display($args) {

			
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت حضرت فاطمه زهراء (س)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/kosar_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";

    
}
wp_register_sidebar_widget(
    ' random_kosar_sh_1',        
    'پیامک شهادت حضرت فاطمه زهراء (س)',        
    'random_kosar_sh_display',  
    array(                  
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت حضرت فاطمه زهراء سلام الله علیها'
    )
);

function random_imam_hasan_sh_display($args) {

			
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام حسن (ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_hasan_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";

    
}
wp_register_sidebar_widget(
    'random_imam_hasan_sh_1',         
    'پیامک شهادت امام حسن (ع)',          
    'random_imam_hasan_sh_display',  
    array(                  
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت  امام حسن علیه السلام'
    )
);

function random_imam_hussain_sh_display($args) {

			
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام حسین (ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_hussain_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";

}
wp_register_sidebar_widget(
    'random_imam_hussain_sh_1',         
    'پیامک شهادت امام حسین (ع)',        
    'random_imam_hussain_sh_display',   
    array(                   
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام حسین (ع)'
    )
);

function random_imam_sajjad_sh_display($args) {		
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام سجاد (ع)" . $after_title;
   echo $after_widget;
   // random sms file here
       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_sajjad_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";   
}
wp_register_sidebar_widget(
    'random_imam_sajjad_sh_1',        
    'پیامک شهادت امام سجاد (ع)',          
    'random_imam_sajjad_sh_display',   
    array(                  
        'description' => 'یش پیامک های تصادفی به مناسبت شهادت امام سجاد (ع)'
    )
);

function random_imam_baqer_sh_display($args) {		
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام محمد باقر(ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_baqer_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	echo "<p id='quotes'>$quotes[$num]</p>";
}
wp_register_sidebar_widget(
    'random_imam_baqer_sh_1',         
    'پیامک شهادت امام محمد باقر(ع)',         
    'random_imam_baqer_sh_display',   
    array(                  
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام محمد  باقر (ع)'
    )
);

function random_imam_sadeq_sh_display($args) {	
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام صادق(ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_sadeq_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	echo "<p id='quotes'>$quotes[$num]</p>"; 
}
wp_register_sidebar_widget(
    'random_imam_sadeq_sh_1',        
    'پیامک شهادت امام صادق(ع)',        
    'random_imam_sadeq_sh_display',   
    array(                 
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام صادق(ع)'
    )
);

function random_imam_kazem_sh_display($args) {		
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام کاظم (ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_kazem_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";
}
wp_register_sidebar_widget(
    'random_imam_kazem_sh_1',         
    'پیامک شهادت امام کاظم (ع)',           
    'random_imam_kazem_sh_display',  
    array(                  
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام کاظم علیه السلام'
    )
);

function random_imam_reza_sh_display($args) {		
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام رضا (ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_reza_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";   
}

wp_register_sidebar_widget(
    'random_imam_reza_sh_1',        
    'پیامک شهادت امام رضا (ع)',         
    'random_imam_reza_sh_display',  
    array(                  // options
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام رضا علیه السلام'
    )
);

function random_imam_javad_sh_display($args) {		
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام جواد (ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_javad_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";   
}
wp_register_sidebar_widget(
    'random_imam_javad_sh_1',         
    'پیامک شهادت امام جواد (ع)',           
    'random_imam_javad_sh_display',  
    array(                  
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام جواد علیه السلام'
    )
);

function random_imam_hadi_sh_display($args) {
		
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام هادی(ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_hadi_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>"; 
}
wp_register_sidebar_widget(
    'random_imam_hadi_sh_1',         
    'پیامک شهادت امام هادی(ع)',          
    'random_imam_hadi_sh_display',   
    array(                  
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام هادی علیه السلام'
    )
);

function random_imam_askari_sh_display($args) {		
   extract($args);
   echo $before_widget;
   echo $before_title . "پیامک شهادت امام عسکری (ع)" . $after_title;
   echo $after_widget;

       $quotes = file ("wp-content/plugins/ShahadatMasoom/text/imam_askari_sh.txt");
    $num = rand (0, (intval(count($quotes))-1));
	
	echo "<p id='quotes'>$quotes[$num]</p>";   
}
wp_register_sidebar_widget(
    'random_imam_askari_sh_1',         
    'پیامک شهادت امام عسکری (ع)',           
    'random_imam_askari_sh_display',   
    array(                 
        'description' => 'نمایش پیامک های تصادفی به مناسبت شهادت امام عسکری  علیه السلام'
    )
);
add_action( 'wp_enqueue_scripts', 'random_prophet_sh_styles' );

function random_prophet_sh_styles() {
	wp_register_style( 'random_prophet_sh', plugins_url( 'ShahadatMasoom/style.css' ) );
	wp_enqueue_style( 'random_prophet_sh' );
}	
?>