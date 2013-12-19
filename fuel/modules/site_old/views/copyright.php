<?php 
        
 
		$this->load->helper('html');
		$this->load->helper('url');
                
                 if($this->customer_model->is_logged_in(false, false))
		{
                        $this->load->view('site/header_aft_logged_in');
                }
                else 
                {
                        $this->load->view('site/header');	 
                }
 
		$this->load->helper('html');
		$this->load->helper('url');
?>



<body>

        
  <div class="main_container">
        
     
      <div class="commt_form1 right-sidebar">
      <h2>Prohibited and Restricted Items Policy</h2>
      
  <div class="about_text">


  <p style="padding-top: 12px;">All members who sell on nyceby.com must follow local state, federal, or international laws, which are inclusive of any restrictions on shipping for your items.
  </p>
  <p>Although some items are deemed legal, Nyceby does not allow selling or exhibiting as an internal policy.  We reserve the right to remove any items from the site we view as inappropriate.
  </p>
    <p>The following items below are NOT to be listed for sale or displayed as collections on Nyceby: 
  </p>
  
 
  <ul>
  <li style="line-height: 28px;">1.	Child pornography, obscene materials or any materials that promote violence, hate or discrimination against oneself or another person, including items that endorse hate organizations, are strictly prohibited.</li>
  
  <li style="line-height: 28px;">2.	Weapons and related items, including firearms, ammunition, silencers, pellet/BB guns, tear gas or stun guns may not be listed for sale on Pricey Tag.Weapons or related items that were legally obtained and are legally owned may be displayed in collections.</li>
  
  <li style="line-height: 28px;">3.	Items issued to United States Armed Forces that have not been disposed of in accordance with Department of Defense demilitarization policies.</li>
  
  <li style="line-height: 28px;">4.	Food stamps, WIC vouchers, SNAP EBT cards, SNAP or WIC foods, infant formula, etc. and other items received from governmental agencies or programs.</li>
  
  <li style="line-height: 28px;">5.	Fireworks, including "safe and sane" fireworks or any destructive devices or explosives may not be listed for sale.  Such items that were legally obtained and are legally owned may be displayed in collections.</li>
  
  <li style="line-height: 28px;">6.	Alcohol or tobacco products may not be listed for sale but may be displayed in collections. Controlled substances or illegal drugs, substances and items used to manufacture controlled substances and drug paraphernalia are prohibited.</li>
  
  <li style="line-height: 28px;">7.	Prescription drugs and medical devices, including prescription or contact lenses, defibrillators, hypodermic needles or hearing aids. Nonprescription drugs that make false or misleading treatment claims or treatment claims that require FDA approval.</li>
  
  <li style="line-height: 28px;">8.	Blood, bodily fluids or body parts.</li>
  
  <li style="line-height: 28px;">9.	Illegal telecommunications equipment, including access cards, signal jamming devices, password sniffers, unloopers, or cable descramblers.</li>
  
  <li style="line-height: 28px;">10.	Stolen property, or property with serial number removed or altered. Burglary tools, including lock-picks or motor vehicle master keys.</li>
  
  <li style="line-height: 28px;">11.	False identification cards, items with police insignia, citizenship documents, birth certificates less than 100 years old or other government documentation less than 100 years old are not allowed.</li>
  
  <li style="line-height: 28px;">12.	Counterfeit currency, coins and stamps, tickets, as well as equipment designed to make them. Counterfeit, replica, or knock-off brand name goods are prohibited unless listings clearly state that they are not authentic. Material that infringes copyright is prohibited.</li>
  
  <li style="line-height: 28px;">13.	Tickets, coupons or gift cards may be displayed in collections but may not be listed for sale. Lottery tickets, sports trading card 'grab bags', raffle tickets, sweepstakes entries, slot machines, other gambling items are prohibited.</li>
  
  <li style="line-height: 28px;">14.	Used or rebuilt batteries, or batteries containing mercury.</li>
  
  <li style="line-height: 28px;">15.	Used bedding and clothing, unless sanitized in accordance with law.</li>
  
  <li style="line-height: 28px;">16.	Bulk email or mailing lists that contain names, addresses, phone numbers, or other personal identifying information</li>
  
  
  </ul>
 
   <div class="div_blank" style="
    width: 30%;
    height: 20px;
"></div>  
  </div>

   </div>

	</div>
	
	
<div id="footer">
<?php 
            $this->load->view('site/footer');
 ?>
</div>	

</body>
</html>
