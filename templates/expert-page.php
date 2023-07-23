<?php
/* Template Name: Expert Page */
get_header();
$id = get_the_ID();
$page = get_post($id);
?>

<?php

/**Hero */
hm_get_template_part('template-parts/hero', ['page' => $page]);

?>
<section class="bg-dark-blue">
    <div class="container text-white no-pad-gutters">
        <h3 class="text-uppercase mb-4"><?php echo $page->intro_title ?></h3>
        <div class="row">
            <div class="col-md-8 mb-4">
                <?php echo $page->post_content ?>
                <h3>Meet Our experts </h3>
                <p>
                Deep knowledge, surprising insights, and a collaborative approach to growing 
                and selling your knowledge-based business. Meet the team that has made Equiteq
                 the leading global investment bank for the knowledge economy.
                </p>
                <div class="" style="float:left;">
        <div class="deal-f-title">
          <h5>
            FILTERS
          </h5>
        </div>
        <div class="deal-filter-box">
          <div class="sector-filter filterbox">
            <label id="typeListLabelSector"><span>Sector</span> <i class="fa fa-caret-down"></i></label>
            <ul data-id="type" class="typeListing" data-filter-group="sector">
              <li data-filter="" data-value="all" class="selected" data-search="All">
                <a href="javascript:void(0)">All</a></li>
              
              
              
              <li data-filter=".technology-services---outsourcing" data-value="1" data-category="technology_services_-_outsourcing" data-search="Technology Services &amp; Outsourcing"><a href="javascript:void(0)">Technology Services &amp; Outsourcing</a></li>
              
              
              
              
              <li data-filter=".software" data-value="2" data-category="software" data-search="Software"><a href="javascript:void(0)">Software</a></li>
              
              
              
              
              <li data-filter=".management-consulting" data-value="3" data-category="management_consulting" data-search="Management Consulting"><a href="javascript:void(0)">Management Consulting</a></li>
              
              
              
              
              <li data-filter=".engineering-consulting---services" data-value="4" data-category="engineering_consulting_-_services" data-search="Engineering Consulting &amp; Services"><a href="javascript:void(0)">Engineering Consulting &amp; Services</a></li>
              
              
              
              
              <li data-filter=".human-capital-management" data-value="5" data-category="human_capital_management" data-search="Human Capital Management"><a href="javascript:void(0)">Human Capital Management</a></li>
              
              
              
              
              <li data-filter=".marketing--communications---information-services" data-value="6" data-category="marketing-_communications_-_information_services" data-search="Marketing, Communications &amp; Information Services"><a href="javascript:void(0)">Marketing, Communications &amp; Information Services</a></li>
              
              
            </ul>
          </div>
          <div class="location-filter filterbox">
            <label id="typeListLabelLocation"><span>Location</span> <i class="fa fa-caret-down"></i></label>
            <ul data-id="type" class="typeListing" data-filter-group="location">
              <li data-filter="" data-value="all" class="selected" data-search="All">
                <a href="javascript:void(0)">All</a></li>
              
              
              
              <li data-filter=".new-york--usa" data-value="1" data-category="new_york-_usa" data-search="New York, USA"><a href="javascript:void(0)">New York, USA</a></li>
              
              
              
              
              <li data-filter=".boston--usa" data-value="2" data-category="boston-_usa" data-search="Boston, USA"><a href="javascript:void(0)">Boston, USA</a></li>
              
              
              
              
              <li data-filter=".london--uk" data-value="3" data-category="london-_uk" data-search="London, UK"><a href="javascript:void(0)">London, UK</a></li>
              
              
              
              
              <li data-filter=".paris--france" data-value="4" data-category="paris-_france" data-search="Paris, France"><a href="javascript:void(0)">Paris, France</a></li>
              
              
              
              
              <li data-filter=".australia-and-new-zealand" data-value="5" data-category="australia_and_new_zealand" data-search="Australia and New Zealand"><a href="javascript:void(0)">Australia and New Zealand</a></li>
              
              
              
              
              <li data-filter=".asia-pacific" data-value="6" data-category="asia_pacific" data-search="Asia Pacific"><a href="javascript:void(0)">Asia Pacific</a></li>
              
              
            </ul>
          </div>
        </div>
      </div>
                <div class="absolute right-1" style="float:right;">
        <label for="search" class="searchtext">Search</label>
        <div class="input-group alt">
          <input type="text" class="" id="quicksearch">
          <span class="input-group-append">
            <div class=""><i class="fa fa-search"></i></div>
          </span>
        </div>
      </div>
            </div>

            
        </div>
       
    </div>
    
</section>
<section class="bg-white">
<div class="dealing-section" id="widget_1637744449465">
  <div class="page-center">
    <div class="videoBoxListing" data-table="5309099" style="position: relative; height: 12841.4px;">
      
      <div class="dealBox  london--uk " style="position: absolute; left: 0px; top: 0px; ">
        <div class="flex flex-row gap-[50px] " style=" flex:auto !important;">
          <div class="team-img ">
            <a href="/team/paul-collins">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Paul%20Collins%20use.png" alt="Paul Collins">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/paul-collins">Paul Collins</a>
          </div>
          <div class="member-desigantion">Founder &amp; Chairman</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:paul.collins@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)203%20651%200608"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/pecollins" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  new-york--usa" style="position: absolute; left: 285px; top: 0px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/david-jorgenson">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/David%20Jorgenson%20(4)%20USE.png" alt="David Jorgenson">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/david-jorgenson">David Jorgenson</a>
          </div>
          <div class="member-desigantion">Chief Executive Officer</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:david.jorgenson@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20716%20512%202127"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/pub/david-jorgenson/0/24a/a54" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 411.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/adam-tindall">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Adam%20Tindall%20(USE).png" alt="Adam Tindall">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/adam-tindall">Adam Tindall</a>
          </div>
          <div class="member-desigantion">Managing Director, Head of North America</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:adam.tindall@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20212%20256%201120"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://uk.linkedin.com/in/adamtindall" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  boston--usa" style="position: absolute; left: 285px; top: 411.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/greg-fincke">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Greg%20Fincke%20(6)_USE.png" alt="Greg Fincke">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/greg-fincke">Greg Fincke</a>
          </div>
          <div class="member-desigantion">Managing Director, Head of North America</div>
          <div class="member-address">Boston, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:Greg.Fincke@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20212%20256%201120%20(102)"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/gregfincke" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  london--uk" style="position: absolute; left: 0px; top: 847px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/jerome-glynn-smith">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Jerome%20Glynn-Smith%20(5).png" alt="Jerome Glynn-Smith">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/jerome-glynn-smith">Jerome Glynn-Smith</a>
          </div>
          <div class="member-desigantion">Managing Director, Head of Europe</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:jerome.glynn-smith@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)203%20651%200617"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jerome-glynn-smith-aa7371a/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 285px; top: 847px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/jean-louis-michelet">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/JL%20Michelet%20(3)(Use).png" alt="Jean-Louis Michelet">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/jean-louis-michelet">Jean-Louis Michelet</a>
          </div>
          <div class="member-desigantion">Managing Director, Head of Asia Pacific</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:jean-louis.michelet@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+(65)%209619%204322"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jlmicheletxpm" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 0px; top: 1282.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/sylvaine-masson">
              <img src="https://www.equiteq.com/hubfs/Sylvaine%20Masson%20(1).png" alt="Sylvaine Masson">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/sylvaine-masson">Sylvaine Masson</a>
          </div>
          <div class="member-desigantion">Managing Director, Head of Asia Pacific</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:sylvaine.masson@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+(65)%208284%206383"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="http://sg.linkedin.com/pub/sylvaine-masson/45/2b3/41" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  new-york--usa" style="position: absolute; left: 285px; top: 1282.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/wade-pearson">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Wade%20Pearson%20(5)%20USE.png" alt=" Wade Pearson">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/wade-pearson"> Wade Pearson</a>
          </div>
          <div class="member-desigantion">Chief Financial and Operating Officer</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:wade.pearson@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20646%20373%207852"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/wadejpearson/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting marketing--communications---information-services  london--uk" style="position: absolute; left: 0px; top: 1718px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/emmanuel-kostucki">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Emmanuel%20Kostucki%20(7)%20USE.png" alt="Emmanuel Kostucki">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/emmanuel-kostucki">Emmanuel Kostucki</a>
          </div>
          <div class="member-desigantion">Managing Director</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:emmanuel.kostucki@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)7891%20818997"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/ekostucki/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  australia-and-new-zealand" style="position: absolute; left: 285px; top: 1718px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/alex-monck">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Alex%20Monck%20(1)%20USE.png" alt="Alex Monck">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/alex-monck">Alex Monck</a>
          </div>
          <div class="member-desigantion">Managing Director</div>
          <div class="member-address">Australia and New Zealand </div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:alex.monck@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+61%20(2)%209051%209007"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/alex-monck-a84557152/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services marketing--communications---information-services  paris--france" style="position: absolute; left: 0px; top: 2129.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/alexandre-steiner">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Alexandre-Steiner.png" alt="Alexandre Steiner">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/alexandre-steiner">Alexandre Steiner</a>
          </div>
          <div class="member-desigantion">Managing Director</div>
          <div class="member-address">Paris, France</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:alexandre.steiner@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+33%20603014591"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/alexandre-steiner-00892b1/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  london--uk" style="position: absolute; left: 285px; top: 2129.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/paul-beaumont">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Paul%20Beaumont%20(1)%20USE.png" alt="Paul Beaumont ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/paul-beaumont">Paul Beaumont </a>
          </div>
          <div class="member-desigantion">Director</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:paul.beaumont@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)786%20044%202717"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/pub/paul-beaumont/0/516/557" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 2541px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/alex-floess">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Alexander%20Floess%20(5)%20USE.png" alt="Alex Floess">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/alex-floess">Alex Floess</a>
          </div>
          <div class="member-desigantion">Director</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:alexander.floess@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20(518)%20320-5837"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/alex-floess-cfa-14020b75/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 285px; top: 2541px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/john-gannon">
              <img src="https://www.equiteq.com/hubfs/John%20Gannon%20Headshot.jpg" alt="John Gannon">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/john-gannon">John Gannon</a>
          </div>
          <div class="member-desigantion">Director, Coverage</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:john.gannon@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20804%20833%209659"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jfgannon" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  boston--usa" style="position: absolute; left: 0px; top: 2952.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/stephen-grant">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Stephen%20Grant%20USE.png" alt="Stephen Grant">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/stephen-grant">Stephen Grant</a>
          </div>
          <div class="member-desigantion">Director</div>
          <div class="member-address">Boston, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:stephen.grant@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20(917)%20596-3300"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 285px; top: 2952.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/arun-nayak">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Arun%20Nayak%20%20(2)%20USE.png" alt="Arun Nayak">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/arun-nayak">Arun Nayak</a>
          </div>
          <div class="member-desigantion">Director</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:arun.nayak@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+65%209134%209173"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/arun-nayak-a019795/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  australia-and-new-zealand" style="position: absolute; left: 0px; top: 3364px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/saahil-rakyan">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Saahil%20Rakyan%20(1).png" alt="Saahil Rakyan">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/saahil-rakyan">Saahil Rakyan</a>
          </div>
          <div class="member-desigantion">Director</div>
          <div class="member-address">Australia and New Zealand </div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:saahil.rakyan@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+61%20(0)%20416%20849%20111"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/saahil-rakyan-488a137/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 285px; top: 3364px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/karan-bhartiya">
              <img src="https://www.equiteq.com/hubfs/Karan%20Bhartiya%20(4)%20-%20USE.png" alt="Karan Bhartiya">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/karan-bhartiya">Karan Bhartiya</a>
          </div>
          <div class="member-desigantion">Associate Director</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:karan.bhartiya@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+65%209450%209305"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/karanbhartiya/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 0px; top: 3775.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/xia-mao">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Xia%20Mao%20(6)%20USE.png" alt="Xia Mao">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/xia-mao">Xia Mao</a>
          </div>
          <div class="member-desigantion">Associate Director</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:xia.mao@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+(65)%203109%201955"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/xia-mao-55734047/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  paris--france" style="position: absolute; left: 285px; top: 3775.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/jeremy-azzarita">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Jeremy%20Azzarita%20(1)%20-%20USE.png" alt="Jeremy Azzarita">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/jeremy-azzarita">Jeremy Azzarita</a>
          </div>
          <div class="member-desigantion">Vice President</div>
          <div class="member-address">Paris, France</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:jeremy.azzarita@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+33%201%2073%2005%2039%2041"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jeremyazzarita/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 4187px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/graham-bell">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Graham%20Bell%20(7)%20USE.png" alt="Graham Bell">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/graham-bell">Graham Bell</a>
          </div>
          <div class="member-desigantion">Vice President</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:graham.bell@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20(917)%20526%201547"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/graham-bell2592" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting marketing--communications---information-services  new-york--usa" style="position: absolute; left: 285px; top: 4187px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/ravi-dosanjh">
              <img src="https://www.equiteq.com/hubfs/Ravi%20Dosanjh.jpg" alt="Ravi Dosanjh">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/ravi-dosanjh">Ravi Dosanjh</a>
          </div>
          <div class="member-desigantion">Vice President</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:ravi.dosanjh@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20212%20256%201120"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/ravi-dosanjh-18aa1175" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 4598.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/tristan-kuhl-bamford">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Tristan%20Kuhl%20Bamford%20(2)%20USE.png" alt="Tristan Kuhl Bamford">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/tristan-kuhl-bamford">Tristan Kuhl Bamford</a>
          </div>
          <div class="member-desigantion">Vice President</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:Tristan.kuhlbamford@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20(646)%20946%202413"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/tristan-kuhl-bamford-cfa-ab804018/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management  london--uk" style="position: absolute; left: 285px; top: 4598.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/gabriele-martini">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Gabriele%20Martini%20USE.jpg" alt="Gabriele Martini">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/gabriele-martini">Gabriele Martini</a>
          </div>
          <div class="member-desigantion">Vice President</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:gabriele.martini@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%207469%20853%20500"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/gabriele-martini-675a8628/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 0px; top: 5010px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/chi-hao-tey">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Chi-Hao-Photo-1.jpeg" alt="Chi Hao Tey">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/chi-hao-tey">Chi Hao Tey</a>
          </div>
          <div class="member-desigantion">Vice President</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:chi.hao.tey@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+65%209122%202596"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/teychihao/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 285px; top: 5010px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/daniel-romm">
              <img src="https://www.equiteq.com/hubfs/Daniel%20Romm.jpg" alt="Daniel Romm">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/daniel-romm">Daniel Romm</a>
          </div>
          <div class="member-desigantion">Senior Associate</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:daniel.romm@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20954%20288%202779"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/danielromm1/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 5421.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/christopher-saunderson">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/USE%20-%20Christopher%20Saunderson.png" alt="Christopher Saunderson">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/christopher-saunderson">Christopher Saunderson</a>
          </div>
          <div class="member-desigantion">Associate</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:christopher.saunderson@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20646%20952%201978"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/christopher-saunderson/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  boston--usa" style="position: absolute; left: 285px; top: 5421.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/patrick-schmelzinger">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Patrick%20Schmelzinger%20(3)%20USE.png" alt="Patrick Schmelzinger">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/patrick-schmelzinger">Patrick Schmelzinger</a>
          </div>
          <div class="member-desigantion">Associate</div>
          <div class="member-address">Boston, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:patrick.schmelzinger@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20917%20938%204632"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/patrickschmelzinger/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 5833px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/kareem-shabsogh">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Kareem%20Shabsogh%20(7)%20USE.png" alt="Kareem Shabsogh">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/kareem-shabsogh">Kareem Shabsogh</a>
          </div>
          <div class="member-desigantion">Associate</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:kareem.shabsogh@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/kshabsog/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  london--uk" style="position: absolute; left: 285px; top: 5833px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/james-stawicki">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/James%20Stawicki%20(4)%20USE.png" alt="James Stawicki">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/james-stawicki">James Stawicki</a>
          </div>
          <div class="member-desigantion">Associate</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:james.stawicki@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%207342%20885%20598"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/james-stawicki" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  new-york--usa" style="position: absolute; left: 0px; top: 6244.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/andrew-white">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Andrew%20White%20(4)%20USE.png" alt="Andrew White">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/andrew-white">Andrew White</a>
          </div>
          <div class="member-desigantion">Associate</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:andrew.white@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:540-290-8116"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/andrew-white-a25b9510a/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  australia-and-new-zealand" style="position: absolute; left: 285px; top: 6244.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/nick-barsha">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Nick%20Barsha%20(5)%20USE.png" alt="Nick Barsha">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/nick-barsha">Nick Barsha</a>
          </div>
          <div class="member-desigantion">Senior Analyst</div>
          <div class="member-address">Australia and New Zealand</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:nick.barsha@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+61%20447%20771%20195"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/nicholas-barsha-966264148/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  australia-and-new-zealand" style="position: absolute; left: 0px; top: 6656px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/liam-gray">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Liam%20Gray%20(3)%20USE.png" alt="Liam Gray">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/liam-gray">Liam Gray</a>
          </div>
          <div class="member-desigantion">Senior Analyst</div>
          <div class="member-address">Australia and New Zealand</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:liam.gray@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+61%20413%20400%20909"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/liam-gray-459661142/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 285px; top: 6656px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/devang-patni">
              <img src="https://www.equiteq.com/hubfs/Devang%20Patni%20(1)%20USE.png" alt="Devang Patni">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/devang-patni">Devang Patni</a>
          </div>
          <div class="member-desigantion">Senior Analyst</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:devang.patni@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+65%203109%201955"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/devang-patni/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  asia-pacific" style="position: absolute; left: 0px; top: 7067.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/tibere-simonnet">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Tibere%20Simonnet%20(1)%20USE.png" alt="Tibère Simonnet">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/tibere-simonnet">Tibère Simonnet</a>
          </div>
          <div class="member-desigantion">Senior Analyst</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:tibere.simonnet@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+6588867726"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/tibere-simonnet/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  asia-pacific" style="position: absolute; left: 285px; top: 7067.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/siyu-zeng-2">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Siyu%20Zeng%20(1)%20USE.jpg" alt="Siyu Zeng">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/siyu-zeng-2">Siyu Zeng</a>
          </div>
          <div class="member-desigantion">Senior Analyst</div>
          <div class="member-address">Asia Pacific</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:siyu.zeng@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+65%209052%200427"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/elvia-zeng-siyu" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 7479px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/zain-arfi">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Zain%20Arfi%20USE%20.png" alt="Zain Arfi">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/zain-arfi">Zain Arfi</a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:zain.arfi@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/zain-arfi/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 7479px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/charlie-bourne">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Charlie%20Bourne%20(5)%20-%20USE.png" alt="Charlie Bourne">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/charlie-bourne">Charlie Bourne</a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:charlie.bourne@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%207799%20903987"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/charlesbourne7483" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 0px; top: 7890.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/jakub-cirkowski">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Jakub%20Cirkowski%20USE.png" alt="Jakub Cirkowski">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/jakub-cirkowski">Jakub Cirkowski</a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:Jakub.cirkowski@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%207824%20118%20148"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/jakubcirkowski" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management  new-york--usa" style="position: absolute; left: 285px; top: 7890.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/carson-cohen">
              <img src="https://www.equiteq.com/hubfs/Carson%20Cohen%20-%201%20(USE).jpg" alt="Carson Cohen ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/carson-cohen">Carson Cohen </a>
          </div>
          <div class="member-desigantion">Analyst </div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:carson.cohen@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="www.linkedin.com/in/carsoncohen" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 0px; top: 8302px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/adam-dudley-fryar">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Adam%20Dudley%20Fryar%20(1)%20USE.png" alt="Adam Dudley Fryar ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/adam-dudley-fryar">Adam Dudley Fryar </a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:adam.dudleyfryar@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)7384%20460030"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/adam-dudley-fryar-41485616a/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 8302px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/giovanni-gabbianelli">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Giovanni%20Gabbianelli%20(3)%20USE.png" alt="Giovanni Gabbianelli ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/giovanni-gabbianelli">Giovanni Gabbianelli </a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:Giovanni.gabbianelli@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/giovanni-gabbianelli/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 8713.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/constance-haccart">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Constance%20Haccart%20(3)USE.png" alt="Constance Haccart">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/constance-haccart">Constance Haccart</a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:constance.haccart@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+1%20(857)%20318-9233"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/constancehaccart/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services  new-york--usa" style="position: absolute; left: 285px; top: 8713.5px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/harshi-jain">
              <img src="https://www.equiteq.com/hubfs/Equiteq-sqaure.jpg" alt="Harshi Jain">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/harshi-jain">Harshi Jain</a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:harshi.jain@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+%208572506756"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="www.linkedin.com/in/harshi-jain" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services  boston--usa" style="position: absolute; left: 0px; top: 9125px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/charlie-kahn">
              <img src="https://www.equiteq.com/hubfs/Charlie%20Kahn-%201%20(USE)-4.jpg" alt="Charlie Kahn ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/charlie-kahn">Charlie Kahn </a>
          </div>
          <div class="member-desigantion">Analyst </div>
          <div class="member-address">Boston, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:Charles.kahn@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:617-417-6115"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/charlie-kahn-a50aa8199/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services  new-york--usa" style="position: absolute; left: 285px; top: 9125px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/mark-ku">
              <img src="https://www.equiteq.com/hubfs/Mark%20Ku%20-%202%20(USE)-1.png" alt="Mark Ku ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/mark-ku">Mark Ku </a>
          </div>
          <div class="member-desigantion">Analyst </div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:Mark.Ku@Equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:(703)-996-6107"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/mark-ku-728b7117a" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 9542.63px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/jeremy-loeb">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Jeremy%20Loeb%20(3).png" alt="Jeremy Loeb">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/jeremy-loeb">Jeremy Loeb</a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:jeremy.loeb@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 9542.63px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/kiran-menon">
              <img src="https://www.equiteq.com/hubfs/Kiran-Menon%20(1).jpg" alt="Kiran Menon">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/kiran-menon">Kiran Menon</a>
          </div>
          <div class="member-desigantion">Analyst</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:kiran.menon@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%207825%20635%20005"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/kiran-menon/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting  asia-pacific" style="position: absolute; left: 0px; top: 9954.13px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/kenny-ong">
              <img src="https://www.equiteq.com/hubfs/Kenny-Ong-Headshot-bw-square2.png" alt="Kenny Ong ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/kenny-ong">Kenny Ong </a>
          </div>
          <div class="member-desigantion">Analyst </div>
          <div class="member-address">Asia Pacific </div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:kenny.ong@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+65%2090910218"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/kenny-ong-9b6032165/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services  australia-and-new-zealand" style="position: absolute; left: 285px; top: 9954.13px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/clement-mouvaux">
              <img src="https://www.equiteq.com/hubfs/4th%20of%20July%20(3).png" alt="Clement Mouvaux">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/clement-mouvaux">Clement Mouvaux</a>
          </div>
          <div class="member-desigantion">Analyst </div>
          <div class="member-address">Australia and New Zealand</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:clement.mouvaux@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+61%20473%20929%20295"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://au.linkedin.com/in/clementmouvaux" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox technology-services---outsourcing software management-consulting engineering-consulting---services  london--uk" style="position: absolute; left: 0px; top: 10366.3px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/yash-shanghavi">
              <img src="https://www.equiteq.com/hubfs/Yash%20Shanghavi%20Headshot%20-BW.jpg" alt="Yash Shanghavi ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/yash-shanghavi">Yash Shanghavi </a>
          </div>
          <div class="member-desigantion">Analyst </div>
          <div class="member-address">London, Uk </div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:yash.shanghavi@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:0734112033"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/yash-shanghavi-0bb015132/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 10366.3px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/sarah-tucker">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Sarah%20Tucker%20(3)%20USE.png" alt="Sarah Tucker">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/sarah-tucker">Sarah Tucker</a>
          </div>
          <div class="member-desigantion">HR Director</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:sarah.tucker@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%207741%20019994"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/sarah-tucker-6786b016/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  new-york--usa" style="position: absolute; left: 0px; top: 10777.8px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/paul-asaro">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Paul%20Asaro%20USE.png" alt="Paul Asaro">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/paul-asaro">Paul Asaro</a>
          </div>
          <div class="member-desigantion">VP and Controller</div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:paul.asaro@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+%201%20518%20495%202217"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/paulasaro/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 10777.8px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/louise-lundblad">
              <img src="https://www.equiteq.com/hubfs/Louise%20Lundblad%20(8).jpg" alt="Louise Lundblad">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/louise-lundblad">Louise Lundblad</a>
          </div>
          <div class="member-desigantion">Marketing Manager</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:louise.lundblad@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/louiselundblad/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox human-capital-management marketing--communications---information-services  london--uk" style="position: absolute; left: 0px; top: 11189.3px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/ellie-millar">
              <img src="https://www.equiteq.com/hubfs/EllieMillar-Headshot-square.jfif" alt="Ellie Millar ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/ellie-millar">Ellie Millar </a>
          </div>
          <div class="member-desigantion">HR Advisor </div>
          <div class="member-address">London, UK </div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:ellie.millar@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%20203%20651%200600"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/ecm23/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox marketing--communications---information-services  london--uk" style="position: absolute; left: 285px; top: 11189.3px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/aisha-aziz">
              <img src="https://www.equiteq.com/hubfs/Screenshot%202023-07-04%20134009.png" alt="Aisha Aziz ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/aisha-aziz">Aisha Aziz </a>
          </div>
          <div class="member-desigantion">Marketing Executive </div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:aisha.aziz@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)%207384%20252%20190"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="www.linkedin.com/in/aishaaziz" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 0px; top: 11606.9px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/david-cheesman">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/David%20Cheesman%20(5).png" alt="David Cheesman">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/david-cheesman">David Cheesman</a>
          </div>
          <div class="member-desigantion">Group Director</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:david.cheesman@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)7831%20399461"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/pub/david-cheesman/1/ba7/395" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 11606.9px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/tony-rice">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Tony-Rice.png" alt="Tony Rice ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/tony-rice">Tony Rice </a>
          </div>
          <div class="member-desigantion">Group Director</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:tony.rice@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)7802%20162443"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/tonyriceequiteq" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 0px; top: 12018.4px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/phil-baxter">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Phil%20Baxter%20(5).png" alt="Phil Baxter">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/phil-baxter">Phil Baxter</a>
          </div>
          <div class="member-desigantion">Associate Director</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:phil.baxter@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)7785%20381971"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/pub/phil-baxter/b/801/126" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 12018.4px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/bruce-ramsay">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Bruce-Ramsay.png" alt="Bruce Ramsay">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/bruce-ramsay">Bruce Ramsay</a>
          </div>
          <div class="member-desigantion">Associate Director</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:bruce.ramsay@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)7860%20442715"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/pub/bruce-ramsay/0/559/753" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox human-capital-management marketing--communications---information-services  new-york--usa" style="position: absolute; left: 0px; top: 12429.9px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/ariana-mann">
              <img src="https://www.equiteq.com/hubfs/USE%20Ariana%20Mann%20(5).png" alt="Ariana Mann ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/ariana-mann">Ariana Mann </a>
          </div>
          <div class="member-desigantion">Executive Assistant to the CEO </div>
          <div class="member-address">New York, USA</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:ariana.mann@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:(917)%20526-1027"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/ariana-mann0920/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
      <div class="dealBox  london--uk" style="position: absolute; left: 285px; top: 12429.9px;">
        <div class="team-box-inner">
          <div class="team-img">
            <a href="/team/nancy-dougall">
              <img src="https://www.equiteq.com/hubfs/Team%20Members/Nancy%20Dougall%20USE.jpg" alt="Nancy Dougall ">              
            </a>
          </div>
          <div class="member-name">
            <a href="/team/nancy-dougall">Nancy Dougall </a>
          </div>
          <div class="member-desigantion">PA to the Directors</div>
          <div class="member-address">London, UK</div>
          <div class="social-icons">
            <ul class="experts-socials p-0 align-items-center">
              <li><a href="mailto:nancy.dougall@equiteq.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
              <li><a href="tel:+44%20(0)203%20651%200604"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
              <li><a href="https://www.linkedin.com/in/nancy-dougall-973804aa/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      
    </div>
    <div class="no-result" style="">
      <h3 class="text-uppercase">No Results</h3>
      <p>Sorry, we couldn't find any content for “<span class="sr no-result-item">testr</span>”.</p>
      <p>If you can't find what you're looking for on our website, you can <a href="https://www.equiteq.com/contact-us" class="btn-outline font-weight-bold">contact us</a> directly for more information.</p>
    </div>
  </div>
</div>
</section>
<!--May implement the experts profile list here-->

<?php
get_footer();
?>