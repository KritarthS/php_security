<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rejuvin8 | Landing Page</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>
<body>

  <div class="container-fluid head">
    <div class="row">
      <div class="logo col-lg-6 col-md-6 col-sm-12">
        <img src="imgs/logo.png" alt="Rejuvinate Logo">
      </div>
      <nav class="nav col-lg-6 col-md-6 col-sm-12">
        <ul>
          <li><i class="fas fa-syringe"></i><a class="nav_cell" href="#serviceHead">Services</a></li>
          <li><i class="fas fa-plus-circle"></i><a class="nav_cell" href="#benefitHead">Benefits</a></li>
          <li><i class="fas fa-user-md"></i><a class="nav_cell" href="#abtPho">About</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="header col-lg-12 col-md-12 col-sm-12">
        <h1>Rediscover Yourself !</h1>
      </div>
    </div>
    <div class="row">
      <div id="contForm" class="col-lg-6 col-md-6 col-sm-12">
        <form action="validate.php" method="post">
          <h3>To explore our services and set up a free consultation, fill the form below.</h3>
          <div id="formLine"></div>
          <input type="text" name="name" placeholder="Name:" required>
          <input type="email" name="email" placeholder="Email:" required>
          <input id="submit" type="submit" name="submit" value="SUBMIT">
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div id="serviceHead">
        <div class="headLine"></div>
        <h2>OUR</h2>
        <h2>SERVICES:</h2>
      </div>
    </div>
    <div class="row">
      <div class="serviceCont col-12">
        <p>Plastic surgery involves many choices. The first and most important is selecting a
        surgeon you can trust.
        </p>
        <p>
        Dr. Sheila Ree is a fully certified plastic surgeon and a member of the Royal College of
        Physicians and Surgeons of Canada. She has been practicing medicine for over 25 years
        and offers her expertise to you.
        </p>
        <p>
        Our goal is to help you achieve the look you want-one that is attractive, natural looking
        and makes you feel good about yourself. Cosmetic surgery can address a variety of
        issues as a result of excessive weight loss, multiple pregnancies and on-going aging.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="services col-12">
        <div class="serv">
          <img src="imgs/facelift.png" alt=" facelift icon">
          <h4>Rhytidectomy</h4>
        </div>
        <div class="serv">
          <img src="imgs/breastAug.png" alt="breast augmentation icon">
          <h4>Breast Augmentation</h4>
        </div>
        <div class="serv">
          <img src="imgs/tummytuck.png" alt=" tummy tuck icon">
          <h4>Abdominoplasty</h4>
        </div>
        <div class="serv">
          <img src="imgs/lipAug.png" alt=" lip augmentation icon">
          <h4>Lip Augmentation</h4>
        </div> 
        <div class="serv">
          <img src="imgs/noseJob.png" alt=" nose job icon">
          <h4>Rhinoplasty</h4>
        </div>       
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="whyHead col-12">
      <div class="headLine"></div>
        <h2>WHY</h2>
        <h2>REJUVIN8 ?</h2>
      </div>
    </div>
    <div class="row">
      <div class="whyCont">
        <p>
        Our world class facilities are made keeping our patients in mind.
        </p>
        <p>
        Our awarded staff consists of multi-lingual trained professionals and are at your disposal
        throughout the duration of the procedure. We have glowing reviews from all our former
        patients who swear by the quality of work Dr. Sheila produces.
        </p>
        <p>
        We are located at a convenient, discreet location at the North Shore of Vancouver and
        are neighbours to hotels and retail stores.
        </p>
        <p>
        We also avail our patients with a private entrance and multi-storeyed underground
        parking to make sure your experience here is unparalleled.
        </p>
      </div>
    </div>
  </div>
  
  <div class="container benefits">
    <div class="row">
      <div class="benefitImg col-lg-8 col-md-8 col-sm-12">
        <img src="imgs/benefitFace.png" alt="glowing face image">
      </div>
      <div class="benefitCont col-lg-4 col-md-4 col-sm-12">
        <div id="benefitHead">
          <div class="headLine"></div>
          <h2>BENEFITS OF</h2>
          <h2>COSMETIC SURGERY :</h2>
        </div>
        <div class="benefitPoints">
          <p>- Keeps your appearence youthful</p>
          <p>- Removes signs of premature ageing from your skin</p>
          <p>- Protects your skin from harmful rays and sun damage</p>
          <p>- Makes you feel more confident about yourself</p>
          <p>- Reduces stress, anxiety and depression</p>
          <a class="btn btn-primary" href="#">GET FREE CONSULTATION</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="about col-12">
        <div class="abtCont col-lg-6 col-md-6 col-sm-12">
          <div class="headLine"></div>
          <h2>ABOUT</h2>
          <h2>DR.SHEILA REE :</h2>
          <div id="abtIntCont">
            <p>“As your cosmetic surgeon, it is my goal to help
            you achieve the look you want – one that is
            attractive, natural looking and makes you feel
            good about yourself. I spend time with each of my
            patients, to consult with them about their options
            and assist them in making the right choices for
            their cosmetic surgery.”
            </p>
            <p>
            Dr. Ree’s plastic surgery specialties include breast
            augmentation, facelift, abdominoplasty, rhinoplasty and
            liposuction. Ranked as one of Canada’s top 10
            consumers of breast implants by Allergan, she has
            many awards and distinctions to her name,
            including one of Canada’s top 10 doctors.
            </p>
          </div>
        </div>
        <div class="abtImg col-lg-6 col-md-6 col-sm-12">
          <img id="abtPho" src="imgs/sheila.png" alt="Dr. Sheila Ree">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid cred">
    <div class="row">
      <div class="credentials col-lg-6 col-md-6 col-sm-12">
        <div class="headLine"></div>
        <h2>CREDENTIALS :</h2>
        <p>• Clinical Professor, Division of Plastic Surgery, UBC</p>
        <p>• Active Member Dept. of Surgery: St. Paul’s Hospital, Mount St.</p>
        <p>• Joseph Hospital, Lions Gate Hospital, Vancouver Acute, BC Children’s Hospital</p>
        <p>• Physician Program Director, Surgery, Providence Health Care 2005-2011</p>
        <p>• Associate Head, Department of Surgery UBC 2007-2011</p>
        <p>• Chair, Department of Surgery, Providence Health Care 2001-2011</p>
        <img src="imgs/affiliations.png" alt="affiliations images">
      </div>
      <div class="awards col-lg-6 col-md-6 col-sm-12">
        <div class="headLine"></div>
        <h2>AWARDS :</h2>
        <p>• Vancouver Medical Association – Primus Inter Pares Award
        (Equal Among Equal) 2018</p>
        <p>• YWCA Women of Distinction Awards – Nominee 2018</p>
        <p>• YWCA Women of Distinction Awards – Nominee 2016</p>
        <p>• Hospital Magazine “Canada’s Best Doctors” 2015</p>
        <p>• Honorary Mention – Master Teaching in Surgery Award, UBC, 2015</p>
        <p>• CMUS Excellence in Teaching Award for Medicine Year IV, UBC, 2013</p>
        <p>• Honorary Mention – Master Teaching in Surgery Award, UBC, 2012</p>
        <p>• Master Teacher & Surgery Award, UBC, 2012</p>
        <p>• Master Teacher & Surgery Award, UBC, 2011</p>
        <p>• Master Teacher & Surgery Award, UBC, 2011</p>
      </div>
    </div>
  </div>

  <div class="container ofr">
    <div class="row">
      <div class="offer col-12">
        <div class="offerHead col-lg-8 col-md-8 col-sm-12">
          <h2>TO WIN A FREE E-BOOK ABOUT ADVANCED SKIN AND BODY CARE TECHNIQUES WRITTEN BY DR. SHEILA REE WORTH $119, CLICK HERE</h2>
        </div>
        <div class="offerCta col-lg-4 col-md-4 col-sm-12">
          <a class="btn btn-primary" href="#">GET FREE E-BOOK</a>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid footer">
    <div class="row">
      <div class="contact col-lg-4 col-md-4 col-sm-12">
        <div class="phone">
        <i class="fas fa-phone"></i>
        <h4>Phone : +1 778 798 8008</h4>
        </div>
        <div class="location">
        <i class="fas fa-map-marker-alt"></i>
        <h4>Location : 1100 Lonsdale Ave, Suite #110, V7M 2H3</h4>
        </div>
      </div>
      <div class="footLogo col-lg-4 col-md-4 col-sm-12">
        <img src="imgs/logo.png" alt="Rejuvinate Logo">
      </div>
      <div class="copyright col-lg-4 col-md-4 col-sm-12">
      <h4>Copyright © 2019 Dr. Sheila Ree, Cosmetic Surgeon</h4>
      <h4>• All rights reserved</h4>
      </div>
    </div>
  </div>
</body>
</html>