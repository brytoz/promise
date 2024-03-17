<?php 
require('functions/query.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="tb7qy5NtbrwPcgJpbvOseShIZDZjgQZrsgxAUrp5">
    <meta name="keywords" content="Assets Genius Hub">
    <meta name="description" content="Assets Genius Hub">
    <link rel="canonical" href="https://ap.assetsgeniushub.com/register"/>
    <link rel="shortcut icon" href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png" type="image/x-icon"/>

    <link rel="icon" href="https://ap.assetsgeniushub.com/assets/global/images/DtovkNjvAQbWBGVkYpwy.png" type="image/x-icon"/>
    <link rel="stylesheet" href="css/fontawesome.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/animate.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/nice-select.css"/>
    <link rel="stylesheet" href="css/datatables.min.css"/>
    <link rel="stylesheet" href="css/simple-notify.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/notify.css"/>        <link rel="stylesheet" href="css/custom.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
            <link rel="stylesheet" href="css/aos.css"/>
        <link rel="stylesheet" href="css/styles.css?var=2.1"/>

    <style>
        //The Custom CSS will be added on the site head tag 
.site-head-tag {
	margin: 0;
  	padding: 0;
}
    </style>

    <title>Assets Genius Hub -     Register
</title>


</head>
<body>
<script>
    var notify = {
        timeout: "5000",
    }
</script>


    <!-- Login Section -->
    <section class="section-style site-auth">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-12">
                    <div class="auth-content">
                        <div class="logo">
                            <a href="https://ap.assetsgeniushub.com"><img src="https://ap.assetsgeniushub.com/assets/global/images/DCysJS7bhCshvD1yakcU.png" alt=""/></a>
                        </div>
                        <div class="title">
                            <h2> 💪 Create an account</h2>
                            <p>Register to continue with Assets Genius Hub</p>
                        </div>
                        

                        <div class="site-auth-form">
       <?php echo '<form action="'.register($conn).'"  method="POST" class="row"  >'; ?>

                                <input type="hidden" name="_token" value="tb7qy5NtbrwPcgJpbvOseShIZDZjgQZrsgxAUrp5">                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="single-field">
                                        <label class="box-label" for="name">First Name<span
                                                class="required-field">*</span></label>
                                        <input
                                            class="box-input"
                                            type="text"
                                            placeholder="Your First Name"
                        name="firstname"
                                            value=""
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="single-field">
                                        <label class="box-label" for="name">Last Name<span
                                                class="required-field">*</span></label>
                                        <input
                                            class="box-input"
                                            type="text"
                                            placeholder="Your Last Name"
                        name="lastname"
                                            value=""
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="single-field">
                                        <label class="box-label" for="email">Email Address<span
                                                class="required-field">*</span></label>
                                        <input
                                            class="box-input"
                                            type="email"
                                            name="email"
                                            value=""
                                            placeholder="Enter Your Email Address"
                                            required
                                        />
                                    </div>
                                </div>

                                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="single-field">
                                            <label class="box-label" for="username">User Name<span
                                                    class="required-field">*</span></label>
                                            <input
                                                class="box-input"
                                                type="text"
                                                placeholder="Enter Your User Name"
                                                name="username"
                                                value=""
                                                required
                                            />
                                        </div>
                                    </div>
                                                                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="single-field">
                                            <label class="box-label" for="username">Select Country<span
                                                    class="required-field">*</span></label>

                                            <select name="country" 
                                            id="countrySelect" class="site-nice-select">

                                                                                                    <option  value="Afghanistan:+93">
                                                        Afghanistan
                                                    </option>
                                                                                                    <option  value="Aland Islands:+358">
                                                        Aland Islands
                                                    </option>
                                                                                                    <option  value="Albania:+355">
                                                        Albania
                                                    </option>
                                                                                                    <option  value="Algeria:+213">
                                                        Algeria
                                                    </option>
                                                                                                    <option  value="AmericanSamoa:+1684">
                                                        AmericanSamoa
                                                    </option>
                                                                                                    <option  value="Andorra:+376">
                                                        Andorra
                                                    </option>
                                                                                                    <option  value="Angola:+244">
                                                        Angola
                                                    </option>
                                                                                                    <option  value="Anguilla:+1264">
                                                        Anguilla
                                                    </option>
                                                                                                    <option  value="Antarctica:+672">
                                                        Antarctica
                                                    </option>
                                                                                                    <option  value="Antigua and Barbuda:+1268">
                                                        Antigua and Barbuda
                                                    </option>
                                                                                                    <option  value="Argentina:+54">
                                                        Argentina
                                                    </option>
                                                                                                    <option  value="Armenia:+374">
                                                        Armenia
                                                    </option>
                                                                                                    <option  value="Aruba:+297">
                                                        Aruba
                                                    </option>
                                                                                                    <option  value="Australia:+61">
                                                        Australia
                                                    </option>
                                                                                                    <option  value="Austria:+43">
                                                        Austria
                                                    </option>
                                                                                                    <option  value="Azerbaijan:+994">
                                                        Azerbaijan
                                                    </option>
                                                                                                    <option  value="Bahamas:+1242">
                                                        Bahamas
                                                    </option>
                                                                                                    <option  value="Bahrain:+973">
                                                        Bahrain
                                                    </option>
                                                                                                    <option  value="Bangladesh:+880">
                                                        Bangladesh
                                                    </option>
                                                                                                    <option  value="Barbados:+1246">
                                                        Barbados
                                                    </option>
                                                                                                    <option  value="Belarus:+375">
                                                        Belarus
                                                    </option>
                                                                                                    <option  value="Belgium:+32">
                                                        Belgium
                                                    </option>
                                                                                                    <option  value="Belize:+501">
                                                        Belize
                                                    </option>
                                                                                                    <option  value="Benin:+229">
                                                        Benin
                                                    </option>
                                                                                                    <option  value="Bermuda:+1441">
                                                        Bermuda
                                                    </option>
                                                                                                    <option  value="Bhutan:+975">
                                                        Bhutan
                                                    </option>
                                                                                                    <option  value="Bolivia, Plurinational State of:+591">
                                                        Bolivia, Plurinational State of
                                                    </option>
                                                                                                    <option  value="Bosnia and Herzegovina:+387">
                                                        Bosnia and Herzegovina
                                                    </option>
                                                                                                    <option  value="Botswana:+267">
                                                        Botswana
                                                    </option>
                                                                                                    <option  value="Brazil:+55">
                                                        Brazil
                                                    </option>
                                                                                                    <option  value="British Indian Ocean Territory:+246">
                                                        British Indian Ocean Territory
                                                    </option>
                                                                                                    <option  value="Brunei Darussalam:+673">
                                                        Brunei Darussalam
                                                    </option>
                                                                                                    <option  value="Bulgaria:+359">
                                                        Bulgaria
                                                    </option>
                                                                                                    <option  value="Burkina Faso:+226">
                                                        Burkina Faso
                                                    </option>
                                                                                                    <option  value="Burundi:+257">
                                                        Burundi
                                                    </option>
                                                                                                    <option  value="Cambodia:+855">
                                                        Cambodia
                                                    </option>
                                                                                                    <option  value="Cameroon:+237">
                                                        Cameroon
                                                    </option>
                                                                                                    <option  value="Canada:+1">
                                                        Canada
                                                    </option>
                                                                                                    <option  value="Cape Verde:+238">
                                                        Cape Verde
                                                    </option>
                                                                                                    <option  value="Cayman Islands:+ 345">
                                                        Cayman Islands
                                                    </option>
                                                                                                    <option  value="Central African Republic:+236">
                                                        Central African Republic
                                                    </option>
                                                                                                    <option  value="Chad:+235">
                                                        Chad
                                                    </option>
                                                                                                    <option  value="Chile:+56">
                                                        Chile
                                                    </option>
                                                                                                    <option  value="China:+86">
                                                        China
                                                    </option>
                                                                                                    <option  value="Christmas Island:+61">
                                                        Christmas Island
                                                    </option>
                                                                                                    <option  value="Cocos (Keeling) Islands:+61">
                                                        Cocos (Keeling) Islands
                                                    </option>
                                                                                                    <option  value="Colombia:+57">
                                                        Colombia
                                                    </option>
                                                                                                    <option  value="Comoros:+269">
                                                        Comoros
                                                    </option>
                                                                                                    <option  value="Congo:+242">
                                                        Congo
                                                    </option>
                                                                                                    <option  value="The Democratic Republic of the Congo:+243">
                                                        The Democratic Republic of the Congo
                                                    </option>
                                                                                                    <option  value="Cook Islands:+682">
                                                        Cook Islands
                                                    </option>
                                                                                                    <option  value="Costa Rica:+506">
                                                        Costa Rica
                                                    </option>
                                                                                                    <option  value="Cote d&#039;Ivoire:+225">
                                                        Cote d&#039;Ivoire
                                                    </option>
                                                                                                    <option  value="Croatia:+385">
                                                        Croatia
                                                    </option>
                                                                                                    <option  value="Cuba:+53">
                                                        Cuba
                                                    </option>
                                                                                                    <option  value="Cyprus:+357">
                                                        Cyprus
                                                    </option>
                                                                                                    <option  value="Czech Republic:+420">
                                                        Czech Republic
                                                    </option>
                                                                                                    <option  value="Denmark:+45">
                                                        Denmark
                                                    </option>
                                                                                                    <option  value="Djibouti:+253">
                                                        Djibouti
                                                    </option>
                                                                                                    <option  value="Dominica:+1767">
                                                        Dominica
                                                    </option>
                                                                                                    <option  value="Dominican Republic:+1849">
                                                        Dominican Republic
                                                    </option>
                                                                                                    <option  value="Ecuador:+593">
                                                        Ecuador
                                                    </option>
                                                                                                    <option  value="Egypt:+20">
                                                        Egypt
                                                    </option>
                                                                                                    <option  value="El Salvador:+503">
                                                        El Salvador
                                                    </option>
                                                                                                    <option  value="Equatorial Guinea:+240">
                                                        Equatorial Guinea
                                                    </option>
                                                                                                    <option  value="Eritrea:+291">
                                                        Eritrea
                                                    </option>
                                                                                                    <option  value="Estonia:+372">
                                                        Estonia
                                                    </option>
                                                                                                    <option  value="Ethiopia:+251">
                                                        Ethiopia
                                                    </option>
                                                                                                    <option  value="Falkland Islands (Malvinas):+500">
                                                        Falkland Islands (Malvinas)
                                                    </option>
                                                                                                    <option  value="Faroe Islands:+298">
                                                        Faroe Islands
                                                    </option>
                                                                                                    <option  value="Fiji:+679">
                                                        Fiji
                                                    </option>
                                                                                                    <option  value="Finland:+358">
                                                        Finland
                                                    </option>
                                                                                                    <option  value="France:+33">
                                                        France
                                                    </option>
                                                                                                    <option  value="French Guiana:+594">
                                                        French Guiana
                                                    </option>
                                                                                                    <option  value="French Polynesia:+689">
                                                        French Polynesia
                                                    </option>
                                                                                                    <option  value="Gabon:+241">
                                                        Gabon
                                                    </option>
                                                                                                    <option  value="Gambia:+220">
                                                        Gambia
                                                    </option>
                                                                                                    <option  value="Georgia:+995">
                                                        Georgia
                                                    </option>
                                                                                                    <option  value="Germany:+49">
                                                        Germany
                                                    </option>
                                                                                                    <option  value="Ghana:+233">
                                                        Ghana
                                                    </option>
                                                                                                    <option  value="Gibraltar:+350">
                                                        Gibraltar
                                                    </option>
                                                                                                    <option  value="Greece:+30">
                                                        Greece
                                                    </option>
                                                                                                    <option  value="Greenland:+299">
                                                        Greenland
                                                    </option>
                                                                                                    <option  value="Grenada:+1473">
                                                        Grenada
                                                    </option>
                                                                                                    <option  value="Guadeloupe:+590">
                                                        Guadeloupe
                                                    </option>
                                                                                                    <option  value="Guam:+1671">
                                                        Guam
                                                    </option>
                                                                                                    <option  value="Guatemala:+502">
                                                        Guatemala
                                                    </option>
                                                                                                    <option  value="Guernsey:+44">
                                                        Guernsey
                                                    </option>
                                                                                                    <option  value="Guinea:+224">
                                                        Guinea
                                                    </option>
                                                                                                    <option  value="Guinea-Bissau:+245">
                                                        Guinea-Bissau
                                                    </option>
                                                                                                    <option  value="Guyana:+595">
                                                        Guyana
                                                    </option>
                                                                                                    <option  value="Haiti:+509">
                                                        Haiti
                                                    </option>
                                                                                                    <option  value="Holy See (Vatican City State):+379">
                                                        Holy See (Vatican City State)
                                                    </option>
                                                                                                    <option  value="Honduras:+504">
                                                        Honduras
                                                    </option>
                                                                                                    <option  value="Hong Kong:+852">
                                                        Hong Kong
                                                    </option>
                                                                                                    <option  value="Hungary:+36">
                                                        Hungary
                                                    </option>
                                                                                                    <option  value="Iceland:+354">
                                                        Iceland
                                                    </option>
                                                                                                    <option  value="India:+91">
                                                        India
                                                    </option>
                                                                                                    <option  value="Indonesia:+62">
                                                        Indonesia
                                                    </option>
                                                                                                    <option  value="Islamic Republic of Persian Gulf:+98">
                                                        Islamic Republic of Persian Gulf
                                                    </option>
                                                                                                    <option  value="Iraq:+964">
                                                        Iraq
                                                    </option>
                                                                                                    <option  value="Ireland:+353">
                                                        Ireland
                                                    </option>
                                                                                                    <option  value="Isle of Man:+44">
                                                        Isle of Man
                                                    </option>
                                                                                                    <option  value="Israel:+972">
                                                        Israel
                                                    </option>
                                                                                                    <option  value="Italy:+39">
                                                        Italy
                                                    </option>
                                                                                                    <option  value="Jamaica:+1876">
                                                        Jamaica
                                                    </option>
                                                                                                    <option  value="Japan:+81">
                                                        Japan
                                                    </option>
                                                                                                    <option  value="Jersey:+44">
                                                        Jersey
                                                    </option>
                                                                                                    <option  value="Jordan:+962">
                                                        Jordan
                                                    </option>
                                                                                                    <option  value="Kazakhstan:+77">
                                                        Kazakhstan
                                                    </option>
                                                                                                    <option  value="Kenya:+254">
                                                        Kenya
                                                    </option>
                                                                                                    <option  value="Kiribati:+686">
                                                        Kiribati
                                                    </option>
                                                                                                    <option  value="Democratic People&#039;s Republic of Korea:+850">
                                                        Democratic People&#039;s Republic of Korea
                                                    </option>
                                                                                                    <option  value="Republic of South Korea:+82">
                                                        Republic of South Korea
                                                    </option>
                                                                                                    <option  value="Kuwait:+965">
                                                        Kuwait
                                                    </option>
                                                                                                    <option  value="Kyrgyzstan:+996">
                                                        Kyrgyzstan
                                                    </option>
                                                                                                    <option  value="Laos:+856">
                                                        Laos
                                                    </option>
                                                                                                    <option  value="Latvia:+371">
                                                        Latvia
                                                    </option>
                                                                                                    <option  value="Lebanon:+961">
                                                        Lebanon
                                                    </option>
                                                                                                    <option  value="Lesotho:+266">
                                                        Lesotho
                                                    </option>
                                                                                                    <option  value="Liberia:+231">
                                                        Liberia
                                                    </option>
                                                                                                    <option  value="Libyan Arab Jamahiriya:+218">
                                                        Libyan Arab Jamahiriya
                                                    </option>
                                                                                                    <option  value="Liechtenstein:+423">
                                                        Liechtenstein
                                                    </option>
                                                                                                    <option  value="Lithuania:+370">
                                                        Lithuania
                                                    </option>
                                                                                                    <option  value="Luxembourg:+352">
                                                        Luxembourg
                                                    </option>
                                                                                                    <option  value="Macao:+853">
                                                        Macao
                                                    </option>
                                                                                                    <option  value="Macedonia:+389">
                                                        Macedonia
                                                    </option>
                                                                                                    <option  value="Madagascar:+261">
                                                        Madagascar
                                                    </option>
                                                                                                    <option  value="Malawi:+265">
                                                        Malawi
                                                    </option>
                                                                                                    <option  value="Malaysia:+60">
                                                        Malaysia
                                                    </option>
                                                                                                    <option  value="Maldives:+960">
                                                        Maldives
                                                    </option>
                                                                                                    <option  value="Mali:+223">
                                                        Mali
                                                    </option>
                                                                                                    <option  value="Malta:+356">
                                                        Malta
                                                    </option>
                                                                                                    <option  value="Marshall Islands:+692">
                                                        Marshall Islands
                                                    </option>
                                                                                                    <option  value="Martinique:+596">
                                                        Martinique
                                                    </option>
                                                                                                    <option  value="Mauritania:+222">
                                                        Mauritania
                                                    </option>
                                                                                                    <option  value="Mauritius:+230">
                                                        Mauritius
                                                    </option>
                                                                                                    <option  value="Mayotte:+262">
                                                        Mayotte
                                                    </option>
                                                                                                    <option  value="Mexico:+52">
                                                        Mexico
                                                    </option>
                                                                                                    <option  value="Federated States of Micronesia:+691">
                                                        Federated States of Micronesia
                                                    </option>
                                                                                                    <option  value="Moldova:+373">
                                                        Moldova
                                                    </option>
                                                                                                    <option  value="Monaco:+377">
                                                        Monaco
                                                    </option>
                                                                                                    <option  value="Mongolia:+976">
                                                        Mongolia
                                                    </option>
                                                                                                    <option  value="Montenegro:+382">
                                                        Montenegro
                                                    </option>
                                                                                                    <option  value="Montserrat:+1664">
                                                        Montserrat
                                                    </option>
                                                                                                    <option  value="Morocco:+212">
                                                        Morocco
                                                    </option>
                                                                                                    <option  value="Mozambique:+258">
                                                        Mozambique
                                                    </option>
                                                                                                    <option  value="Myanmar:+95">
                                                        Myanmar
                                                    </option>
                                                                                                    <option  value="Namibia:+264">
                                                        Namibia
                                                    </option>
                                                                                                    <option  value="Nauru:+674">
                                                        Nauru
                                                    </option>
                                                                                                    <option  value="Nepal:+977">
                                                        Nepal
                                                    </option>
                                                                                                    <option  value="Netherlands:+31">
                                                        Netherlands
                                                    </option>
                                                                                                    <option  value="Netherlands Antilles:+599">
                                                        Netherlands Antilles
                                                    </option>
                                                                                                    <option  value="New Caledonia:+687">
                                                        New Caledonia
                                                    </option>
                                                                                                    <option  value="New Zealand:+64">
                                                        New Zealand
                                                    </option>
                                                                                                    <option  value="Nicaragua:+505">
                                                        Nicaragua
                                                    </option>
                                                                                                    <option  value="Niger:+227">
                                                        Niger
                                                    </option>
                                                                                                    <option  selected
                                                             value="Nigeria:+234">
                                                        Nigeria
                                                    </option>
                                                                                                    <option  value="Niue:+683">
                                                        Niue
                                                    </option>
                                                                                                    <option  value="Norfolk Island:+672">
                                                        Norfolk Island
                                                    </option>
                                                                                                    <option  value="Northern Mariana Islands:+1670">
                                                        Northern Mariana Islands
                                                    </option>
                                                                                                    <option  value="Norway:+47">
                                                        Norway
                                                    </option>
                                                                                                    <option  value="Oman:+968">
                                                        Oman
                                                    </option>
                                                                                                    <option  value="Pakistan:+92">
                                                        Pakistan
                                                    </option>
                                                                                                    <option  value="Palau:+680">
                                                        Palau
                                                    </option>
                                                                                                    <option  value="Palestinian Territory, Occupied:+970">
                                                        Palestinian Territory, Occupied
                                                    </option>
                                                                                                    <option  value="Panama:+507">
                                                        Panama
                                                    </option>
                                                                                                    <option  value="Papua New Guinea:+675">
                                                        Papua New Guinea
                                                    </option>
                                                                                                    <option  value="Paraguay:+595">
                                                        Paraguay
                                                    </option>
                                                                                                    <option  value="Peru:+51">
                                                        Peru
                                                    </option>
                                                                                                    <option  value="Philippines:+63">
                                                        Philippines
                                                    </option>
                                                                                                    <option  value="Pitcairn:+872">
                                                        Pitcairn
                                                    </option>
                                                                                                    <option  value="Poland:+48">
                                                        Poland
                                                    </option>
                                                                                                    <option  value="Portugal:+351">
                                                        Portugal
                                                    </option>
                                                                                                    <option  value="Puerto Rico:+1939">
                                                        Puerto Rico
                                                    </option>
                                                                                                    <option  value="Qatar:+974">
                                                        Qatar
                                                    </option>
                                                                                                    <option  value="Romania:+40">
                                                        Romania
                                                    </option>
                                                                                                    <option  value="Russia:+7">
                                                        Russia
                                                    </option>
                                                                                                    <option  value="Rwanda:+250">
                                                        Rwanda
                                                    </option>
                                                                                                    <option  value="Reunion:+262">
                                                        Reunion
                                                    </option>
                                                                                                    <option  value="Saint Barthelemy:+590">
                                                        Saint Barthelemy
                                                    </option>
                                                                                                    <option  value="Saint Helena, Ascension and Tristan Da Cunha:+290">
                                                        Saint Helena, Ascension and Tristan Da Cunha
                                                    </option>
                                                                                                    <option  value="Saint Kitts and Nevis:+1869">
                                                        Saint Kitts and Nevis
                                                    </option>
                                                                                                    <option  value="Saint Lucia:+1758">
                                                        Saint Lucia
                                                    </option>
                                                                                                    <option  value="Saint Martin:+590">
                                                        Saint Martin
                                                    </option>
                                                                                                    <option  value="Saint Pierre and Miquelon:+508">
                                                        Saint Pierre and Miquelon
                                                    </option>
                                                                                                    <option  value="Saint Vincent and the Grenadines:+1784">
                                                        Saint Vincent and the Grenadines
                                                    </option>
                                                                                                    <option  value="Samoa:+685">
                                                        Samoa
                                                    </option>
                                                                                                    <option  value="San Marino:+378">
                                                        San Marino
                                                    </option>
                                                                                                    <option  value="Sao Tome and Principe:+239">
                                                        Sao Tome and Principe
                                                    </option>
                                                                                                    <option  value="Saudi Arabia:+966">
                                                        Saudi Arabia
                                                    </option>
                                                                                                    <option  value="Senegal:+221">
                                                        Senegal
                                                    </option>
                                                                                                    <option  value="Serbia:+381">
                                                        Serbia
                                                    </option>
                                                                                                    <option  value="Seychelles:+248">
                                                        Seychelles
                                                    </option>
                                                                                                    <option  value="Sierra Leone:+232">
                                                        Sierra Leone
                                                    </option>
                                                                                                    <option  value="Singapore:+65">
                                                        Singapore
                                                    </option>
                                                                                                    <option  value="Slovakia:+421">
                                                        Slovakia
                                                    </option>
                                                                                                    <option  value="Slovenia:+386">
                                                        Slovenia
                                                    </option>
                                                                                                    <option  value="Solomon Islands:+677">
                                                        Solomon Islands
                                                    </option>
                                                                                                    <option  value="Somalia:+252">
                                                        Somalia
                                                    </option>
                                                                                                    <option  value="South Africa:+27">
                                                        South Africa
                                                    </option>
                                                                                                    <option  value="South Sudan:+211">
                                                        South Sudan
                                                    </option>
                                                                                                    <option  value="South Georgia and the South Sandwich Islands:+500">
                                                        South Georgia and the South Sandwich Islands
                                                    </option>
                                                                                                    <option  value="Spain:+34">
                                                        Spain
                                                    </option>
                                                                                                    <option  value="Sri Lanka:+94">
                                                        Sri Lanka
                                                    </option>
                                                                                                    <option  value="Sudan:+249">
                                                        Sudan
                                                    </option>
                                                                                                    <option  value="Suriname:+597">
                                                        Suriname
                                                    </option>
                                                                                                    <option  value="Svalbard and Jan Mayen:+47">
                                                        Svalbard and Jan Mayen
                                                    </option>
                                                                                                    <option  value="Swaziland:+268">
                                                        Swaziland
                                                    </option>
                                                                                                    <option  value="Sweden:+46">
                                                        Sweden
                                                    </option>
                                                                                                    <option  value="Switzerland:+41">
                                                        Switzerland
                                                    </option>
                                                                                                    <option  value="Syrian Arab Republic:+963">
                                                        Syrian Arab Republic
                                                    </option>
                                                                                                    <option  value="Taiwan:+886">
                                                        Taiwan
                                                    </option>
                                                                                                    <option  value="Tajikistan:+992">
                                                        Tajikistan
                                                    </option>
                                                                                                    <option  value="United Republic of Tanzania:+255">
                                                        United Republic of Tanzania
                                                    </option>
                                                                                                    <option  value="Thailand:+66">
                                                        Thailand
                                                    </option>
                                                                                                    <option  value="Timor-Leste:+670">
                                                        Timor-Leste
                                                    </option>
                                                                                                    <option  value="Togo:+228">
                                                        Togo
                                                    </option>
                                                                                                    <option  value="Tokelau:+690">
                                                        Tokelau
                                                    </option>
                                                                                                    <option  value="Tonga:+676">
                                                        Tonga
                                                    </option>
                                                                                                    <option  value="Trinidad and Tobago:+1868">
                                                        Trinidad and Tobago
                                                    </option>
                                                                                                    <option  value="Tunisia:+216">
                                                        Tunisia
                                                    </option>
                                                                                                    <option  value="Turkey:+90">
                                                        Turkey
                                                    </option>
                                                                                                    <option  value="Turkmenistan:+993">
                                                        Turkmenistan
                                                    </option>
                                                                                                    <option  value="Turks and Caicos Islands:+1649">
                                                        Turks and Caicos Islands
                                                    </option>
                                                                                                    <option  value="Tuvalu:+688">
                                                        Tuvalu
                                                    </option>
                                                                                                    <option  value="Uganda:+256">
                                                        Uganda
                                                    </option>
                                                                                                    <option  value="Ukraine:+380">
                                                        Ukraine
                                                    </option>
                                                                                                    <option  value="United Arab Emirates:+971">
                                                        United Arab Emirates
                                                    </option>
                                                                                                    <option  value="United Kingdom:+44">
                                                        United Kingdom
                                                    </option>
                                                                                                    <option  value="United States:+1">
                                                        United States
                                                    </option>
                                                                                                    <option  value="Uruguay:+598">
                                                        Uruguay
                                                    </option>
                                                                                                    <option  value="Uzbekistan:+998">
                                                        Uzbekistan
                                                    </option>
                                                                                                    <option  value="Vanuatu:+678">
                                                        Vanuatu
                                                    </option>
                                                                                                    <option  value="Bolivarian Republic of Venezuela:+58">
                                                        Bolivarian Republic of Venezuela
                                                    </option>
                                                                                                    <option  value="Vietnam:+84">
                                                        Vietnam
                                                    </option>
                                                                                                    <option  value="Virgin Islands, British:+1284">
                                                        Virgin Islands, British
                                                    </option>
                                                                                                    <option  value="Virgin Islands, U.S.:+1340">
                                                        Virgin Islands, U.S.
                                                    </option>
                                                                                                    <option  value="Wallis and Futuna:+681">
                                                        Wallis and Futuna
                                                    </option>
                                                                                                    <option  value="Yemen:+967">
                                                        Yemen
                                                    </option>
                                                                                                    <option  value="Zambia:+260">
                                                        Zambia
                                                    </option>
                                                                                                    <option  value="Zimbabwe:+263">
                                                        Zimbabwe
                                                    </option>
                                                
                                            </select>

                                        </div>
                                    </div>
                                                                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="single-field">
                                            <label class="box-label" for="username">Phone Number<span
                                                    class="required-field">*</span></label>
                                            <div class="input-group joint-input"><span class="input-group-text"
                                                                                       id="dial-code">+234</span>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Phone Number"
                                                    name="phone"
                                                    value=""
                                                    aria-label="Username"
                                                    aria-describedby="basic-addon1"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                
                                                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                        <div class="single-field">
                                            <label class="box-label"
                                                   for="invite">Referral Code</label>
                                            <input
                                                class="box-input"
                                                type="text"
                                                placeholder="Enter Your Referral Code"
                        name="referral"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="single-field">
                                        <label class="box-label" for="password">Password<span
                                                class="required-field">*</span></label
                                        >
                                        <div class="password">
                                            <input
                                                class="box-input"
                                                type="password"
                                                name="password"
                                                placeholder="Enter your password"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="single-field">
                                        <label class="box-label" for="password">Confirm Password<span
                                                class="required-field">*</span></label>
                                        <div class="password">
                                            <input
                                                class="box-input"
                                                type="password"
                                                name="password_confirmation"
                                                placeholder="Enter your password"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="single-field">
                                                                            </div>
                                </div>

                                <div style=" height: 46px;line-height: 46px; width:100%;text-align: center;background-color: #3b3f4c;color: #FFFFFF!important;font-size: 26px;font-weight: bold;letter-spacing: 20px;font-family: 'Mina, sans-serif'; cursive;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;display: flex;justify-content: center;     margin-bottom: 9px;" class="captcha">
        <span style="float:left;  -webkit-transform: rotate(3deg);"><?php echo $token1;?></span> </div>
        <input type="hidden" name="ocaptcha" id="locaptcha" value="<?php echo $token1;?>"  required> 
								<div class="form-group">
                                <?php echo  '<input class="form-control" type="text" name="captcha" id="lcaptcha" 
                                        value="'.$token1.'" placeholder="Enter code" minlength="6" required>' ; ?> 
										<div id="lcaptchaError" class="text-center text-danger font-weight-bold"></div>
									</div>
                                    
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="single-field">
                                        <input
                                            class="form-check-input check-input"
                                            type="checkbox"
                                            name="i_agree"
                                            value="yes"
                                            id="flexCheckDefault"
                                            required
                                        />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            I agree with
                                            <a href="#">Privacy &amp; Policy</a> and
                                            <a href="#">Terms &amp; Condition</a>
                                        </label>
                                    </div>
                                </div>


                                <div class="col-xl-12">
                                    <button type="submit" name="reg_user"
                                     class="site-btn grad-btn w-100">
                                        Create Account
                                    </button>
                                </div>
                            </form>
                            <div class="singnup-text">
                                <p>Already have an account? 
                                <a href="login.php">Login</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->

<script src="https://ap.assetsgeniushub.com/assets/global/js/jquery.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/jquery-migrate.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/scrollUp.min.js"></script>

<script src="js/owl.carousel.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/jquery.nice-select.min.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/lucide.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/datatables.min.js" type="text/javascript" charset="utf8"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/simple-notify.min.js"></script>
<script src="js/main.js?var=5"></script>
<script src="js/cookie.js"></script>
<script src="https://ap.assetsgeniushub.com/assets/global/js/custom.js?var=5"></script>
    <script>
        (function ($) {
            'use strict';
            // AOS initialization
            AOS.init();
        })(jQuery);
    </script>
    <script>
        (function ($) {
            'use strict';
            // To top
            $.scrollUp({
                scrollText: '<i class="fas fa-caret-up"></i>',
                easingType: 'linear',
                scrollSpeed: 500,
                animation: 'fade'
            });
        })(jQuery);
    </script>

<script type="text/javascript" src="https://ap.assetsgeniushub.com/assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
        <script>
        $('#countrySelect').on('change', function (e) {
            "use strict";
            e.preventDefault();
            var country = $(this).val();
            $('#dial-code').html(country.split(":")[1])
        })
    </script>






</body>
</html>

