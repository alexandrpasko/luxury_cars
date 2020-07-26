<?php if($title == 'Luxury Cars Catalog') : ?> 
    <style>
/*navigation*/
      nav{
        margin-bottom: -90px;
      }
/*header*/    
      header{
        background-image: url(images/bgimage4.jpg);
        background-size: cover;
        background-position: center;
        min-height: 350px;
      }
      header .wrapper{
        padding-top: 100px;
      }
      h1.first_heading{
        font-size: 2.6em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin-top: 60px;
        margin-bottom: 0px;
      }
      header div.slogan{
        width: 380px;
      }
      header p{
        font-size: 14px;
        color: #888;
        font-weight: 600;
        line-height: 1.6em;
        margin-bottom: 50px;
      }
      
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 60px 1px;
      }
      section .wrapper{
        background-color: #fff;
        padding: 1px 20px 40px 20px;
      }
      section h2.title{
        /*color: #0e0e0e;*/   /*made it inline as part of the assignment*/
        letter-spacing: 0em;
        margin-top: 20px;
        margin-bottom: 10px;
        font-size: 2.5em;
        font-weight: 600;
      }
      section h2{
        color: #0e0e0e;
        font-size: 1.1em;
        font-weight: 400;
        letter-spacing: 0em;
        /* margin-bottom: 20px; */
      }
      #filters{
        font-size: 1.1em;
        font-weight: 600;
        border: 1px solid #0e0e0e;
        padding: 10px 16px;
        margin: 1em 0em;
        background-color: #e4e4e4;
      }
      #filters p{
        margin: 0px;
      }
      #filters i{
        font-size: 1.1em;
        margin-right: 10px;
      }
      span.filter:hover{
        color: #6b6969;
        cursor: pointer;
      }
      span.results{
        float: right;
      }
      span.gold{
        color: #846a2a;
      }
      div.hidden_form{
        display: none;
      }
      div.hidden_form.visible{
        display: block;
      }
      form#form_filter{
        margin: 10px 0px;
      }
      form#form_filter select{
        font-family: Montserrat, Arial, Helvetica, sans-serif;
        width: 100%;
        border: none;
        padding: 5px 0px;
        border-bottom: 1px solid #6b6969;
        font-size: 1em;
        color: #6b6969;
        background-color: #e4e4e4;
      }
      form#form_filter option.category{
        color: #6b6969;
      }
      form#form_filter option{
        color: #0e0e0e;
      }
      form#form_filter select:hover{
        background-color: #fff;
      }
      form#form_filter button,
      a.reset{
        border: 2px solid #846a2a;
        background-color: #e4e4e4;
        border-radius: 20px;
        padding: 8px 25px;
        color: #846a2a;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 600;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
        font-family: Montserrat, Arial, Helvetica, sans-serif;
        margin-right: 1em;
        margin-top: 1.5em;
        font-size: 0.8em;
      }
      form#form_filter button{
        background-color: #846a2a;
        color: #fff;
      }
      a.reset:hover{
        /* color:  #fff; */
        background-color: #fff;
      }
      form#form_filter button:hover{
        color:  #846a2a;
        background-color: #fff;
      }
      /* end */
      table{
        border-collapse: collapse;
        /*background-color: rgba(132, 106, 42, 0.2);*/
      }
      table td, th{
        border: 1px solid #0e0e0e;
        padding: 3px;
        text-align: center;
      }
      table th{
        padding-top: 10px;
        padding-bottom: 10px;
      }
      table td.image{
        padding: 0px;
      }
      td img{
        margin-right: -1px;
        margin-bottom: -4px;
      }
      table tr.tdcolor{
        background-color: #0e0e0e;
        color: #fff;
      }
      td#signature{
        background-color: #0e0e0e;
        text-align: center;
        word-spacing: 0.2em;
      }
      td:last-child{
        background-color: #e4e4e4;
      }
/*Media Quaries*/
      @media screen and (max-width: 810px){
        table td{
          font-size: 0.9em;
        }
      }
      @media screen and (max-width: 674px){
        table td{
          font-size: 0.8em;
        }
        table{
          width: 100%;
          text-align: center;
        }
        td.image{
          width: 150px;
        }
      }
      @media screen and (max-width: 640px){
        table td{
          font-size: 1em;
        }
        h1.first_heading{
          font-size: 2em;
          margin-top: 40px; 
        }
      }
      @media screen and (max-width: 440px){
        header div.slogan{
          width: 100%;
        }
        section .wrapper{
          padding-right: 0px;
          padding-left: 0px;
        }
        h2.title{
          margin: 20px 20px 10px 20px;
          font-size: 2em;
        }
        section h2{
          margin-left: 20px;
          font-size: 1em;
        }
        table td{
          font-size: 0.8em;
        }
      }
      @media screen and (max-width: 350px){
        table td{
          font-size: 0.7em;
        }
        table{
          margin-left: -15px;
          width: inherit;
        }
      }
    </style>
<?php elseif($title == 'Luxury Cars Home') : ?>
    <style>
/*navigation*/
      nav{
        /*margin-bottom: -170px;*/
      }
      nav a#home{
        color: #846a2a;
      }
/*header*/    
      header{
        background-image: url(images/bgimage1.jpg);
        background-size: cover;
        background-position: center;
        min-height: 820px;
        margin-top: -50px;
      }
      header .wrapper{
        padding-top: 200px;
        text-align: center;
      }
      h1.playfair,
      h2.playfair{
        font-family: "Playfair Display", Montserrat, Arial, Helvetica, sans-serif;
        font-size: 4em;
        font-weight: 400;
        text-transform: uppercase;
        margin: 0em 0.5em;
      }
      /*This is a cool effect; however, it is not supported by IE and needs to 
      be disabled later */
      header h3{
        overflow: hidden;
        background: linear-gradient(90deg, #000, #fff, #000);
        background-repeat: no-repeat;
        background-size: 50%;
        /* This property is for presentation only. Needs to be removed later as IE does not support it. */
        -webkit-background-clip: text;
        -webkit-animation: glance 10s linear infinite;
        animation: glance 10s linear infinite;
      }
      @-webkit-keyframes glance{
        0%{
          background-position: -300%;
        }
        50%{
          background-position: 300%;
        }
        100%{
          background-position: -300%;
        }
      }
      @keyframes glance{
        0%{
          background-position: -300%;
        }
        50%{
          background-position: 300%;
        }
        100%{
          background-position: -300%;
        }
      }
      span.gold{
        color: #846a2a;
      }
      h2.playfair{
        font-size: 3em;
        color: rgba(255,255,255,1);
        
      }
      header h3{
        text-transform: uppercase;
        /*color: #6b6969;*/
        color: rgba(255,255,255,0.1);
        margin-bottom: 254px;
        font-size: 1.5em;
      }
      
      header a,
      a.sliderlink{
        color: #fff;
        background-color: #846a2a;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 10px 15px;
        border-radius: 20px;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
      }
      header a:hover,
      a.sliderlink:hover{
        background-color: #000;
        color: #6b6969;
      }
      p img{
        width: 30px;
        height: 30px;
        margin-top: 60px;
        -webkit-animation: down_arrow 2s ease infinite;
        animation: down_arrow 2s ease infinite;
      }
      @-webkit-keyframes down_arrow{
        0%{
          -webkit-transform: translateY(0px);
          transform: translateY(0px);
        }
        50%{
          -webkit-transform: translateY(-20px);
          transform: translateY(-20px);
        }
        100%{
          -webkit-transform: translateY(0px);
          transform: translateY(0px);
        }
      }
      @keyframes down_arrow{
        0%{
          -webkit-transform: translateY(0px);
          transform: translateY(0px);
        }
        50%{
          -webkit-transform: translateY(-20px);
          transform: translateY(-20px);
        }
        100%{
          -webkit-transform: translateY(0px);
          transform: translateY(0px);
        }
      }
      
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 60px 1px;
      }
      section .wrapper{
        background-color: #fff;
        padding: 1px 30px 30px 30px;
      }
      section h2.main{
        font-size: 2.2em;
        color: #0e0e0e;
        text-transform: uppercase;
        letter-spacing: 0em;
        margin-top: 50px;
        margin-bottom: 0px;
        /*text-align: center;*/
      }
      section p.main{
        color: #6b6969;
        font-size: 1.2em;
        font-weight: 400;
        letter-spacing: 0em;
        margin-bottom: 40px;
        line-height: 1.5em;
        /*text-align: center;*/
      }
      /* Slider*/
      div.slider{
        width: 900px;
        min-height: 350px;
      }
      section ul{
        width: 100%;
        height: 350px;
        padding: 0px;
        margin: 0px;
        background-color: #0e0e0e;
      }
      section li{
        list-style: none;
        width: 25%;
        height: 100%;
        box-sizing: border-box;
        border-left: 1px solid #846a2a;
        float: left;
        -webkit-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        text-align: center;
        background-image: url(images/rent1.jpg);
        background-size: cover;
        background-position: left;
        overflow: hidden;
        position: relative;
      }
      section li:first-of-type{
        background-image: url(images/slider1.jpg);
      }
      section li:nth-of-type(2){
        background-image: url(images/slider2.jpg);
      }
      section li:nth-of-type(3){
        background-image: url(images/slider3.jpg);
      }
      section li:last-child{
        background-image: url(images/slider4.jpg);
      }
      section ul:hover li{
        width: 10%;
      }
      section ul li:hover{
        width: 70%;
      }
      /*Slider content. Note: links styles are groupd with header links upper*/
      h3.sliderheading{
        font-size: 2.5em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin: 0px;
        position: absolute;
        left: 30px;
        top: 20px;
        width: 600px;
        text-align: left;
      }
      section div.slidertext{
        width: 400px;
        position: absolute;
        left: 30px;
        bottom: 5px;
        text-align: left;
      }
      div.slidertext p{
        font-size: 0.9em;
        color: #888;
        font-weight: 600;
        line-height: 1.5em;
      }
      a.sliderlink{
        position: absolute;
        top: 295px;
        left: 480px;
      }
      a.sliderlinkshort{
        left: 520px;
      }
      img.target{
        position: absolute;
        top: 50%;
        left: 50%;
        opacity: 0.7;
        -webkit-transition: 1s;
        transition: 1s;
        -webkit-animation: pulse 3s ease infinite;
        animation: pulse 3s ease infinite;
      }
      @-webkit-keyframes pulse{
        0%{
          -webkit-transform: translateX(-50%) translateY(-50%) scale(1, 1);
          transform: translateX(-50%) translateY(-50%) scale(1, 1);
        }
        50%{
          -webkit-transform: translateX(-50%) translateY(-50%) scale(1.8, 1.8);
          transform: translateX(-50%) translateY(-50%) scale(1.8, 1.8);
        }
        100%{
          -webkit-transform: translateX(-50%) translateY(-50%) scale(1, 1);
          transform: translateX(-50%) translateY(-50%) scale(1, 1);
        }
      }
      @keyframes pulse{
        0%{
          -webkit-transform: translateX(-50%) translateY(-50%) scale(1, 1);
          transform: translateX(-50%) translateY(-50%) scale(1, 1);
        }
        50%{
          -webkit-transform: translateX(-50%) translateY(-50%) scale(1.8, 1.8);
          transform: translateX(-50%) translateY(-50%) scale(1.8, 1.8);
        }
        100%{
          -webkit-transform: translateX(-50%) translateY(-50%) scale(1, 1);
          transform: translateX(-50%) translateY(-50%) scale(1, 1);
        }
      }
      section ul li:hover img.target{
        opacity: 0;
      }
/* Media Quaries*/
      @media screen and (max-width: 950px){
        div.slider{
          width: 100%;
        }
        section .wrapper{
          padding-left: 0px;
          padding-right: 0px;
        }
        section h2.main,
        section p.main{
          margin-left: 20px;
          margin-right: 20px;
        }
        section h2.main{
          margin-top: 30px;
        }
      }
      @media screen and (max-width: 900px){
        a.sliderlink{
          left: 420px;
        }
        a.sliderlinkshort{
          left: 460px;
        }
        h3.sliderheading{
          font-size: 2.3em;
        }
        section h2.main{
          font-size: 2em;
        }
      }
      @media screen and (max-width: 820px){
        a.sliderlink{
          left: 380px;
        }
        a.sliderlinkshort{
          left: 430px;
        }
        h3.sliderheading{
          font-size: 2.2em;
        }
        section div.slidertext{
          width: 340px;
        }
        section h2.main{
          font-size: 1.8em;
        }
        section p.main{
          font-size: 1.1em;
        }
      }
      @media screen and (max-width: 767px){
        header .wrapper{
          padding: 190px 0px 1px 0px;
        }
        div.slider{
          height: 500px;
        }
        section ul{
          height: 100%;
        }
        section li{
          width: 100%;
          height:25%;
        }
        section ul:hover li{
          height: 10%;
          width: 100%;
        }
        section ul li:hover{
          height: 70%;
          width: 100%;
        }
        h3.sliderheading{
          font-size: 2.5em;
          width: 100%;
          text-align: left;
          margin-top: 0px;
        }
        section div.slidertext{
          width: 70%;
          left: 20px;
          opacity: 0;
          -webkit-transition: all 0.5s 0.5s ease;
          transition: all 0.5s 0.5s ease;
        }
        section li:hover div.slidertext{
          opacity: 1;
        }
        a.sliderlink{
          position: absolute;
          top: 295px;
          right: 20px;
          left: auto;
        }
        section li{
          border-bottom: 1px solid #846a2a;
        }
      }
      @media screen and (max-width: 610px){
        header{
          min-height: 667px;
          margin-top: 0px;
        }
        header .wrapper{
          padding-top: 110px;
          margin-top: 0px;
        }
        h1.playfair{
          margin-left: 0px;
          margin-right: 0px;
        }
        h2.playfair{
          font-size: 2.3em;
          margin-left: 0px;
          margin-right: 0px;
        }
        header h3{
          margin-bottom: 220px;
        }
        header a{
          font-size: 0.7em;
          
        }
        p.cta{
          margin-bottom: 0px;
        }
        p.downarrow{
          margin-top: 0px;
          margin-bottom: 0px;
        }
      }
      @media screen and (max-width: 580px){
        section div.slidertext{
          width: 60%;
        }
        h3.sliderheading{
          font-size: 1.8em;
          top: 10px;
          left: 20px;
        }
      }
      @media screen and (max-width: 450px){
        header .wrapper{
          padding-top: 160px;
        }
        h1.playfair{
          font-size: 2.5em;
        }
        h2.playfair{
          font-size: 1.7em;
        }
        header h3{
          font-size: 1.2em;
          margin-bottom: 230px;
        }
      }
      @media screen and (max-width: 425px){
        section .wrapper{
          padding-bottom: 10px;
        }
        section li{
          padding-right: 20px;
        }
        h3.sliderheading{
          font-size: 1.5em;
          left: 20px;
        }
        section div.slidertext{
          width: inherit;
          padding-right: 40px;
          box-sizing: border-box;
          bottom: 40px;
        }
        a.sliderlink{
          left: 50%;
          -webkit-transform: translateX(-50%);
          transform: translateX(-50%);
          top: 300px;
        }
        section h2.main{
          font-size: 1.5em;
        }
        section p.main{
          font-size: 0.95em;
        }
      }
      @media screen and (max-width: 355px){
        header{
          min-height: 568px;
        }
        header .wrapper{
          padding-top: 120px;
        }
        p.cta{
          margin-bottom: 0px;
        }
        header h3{
          margin-bottom: 195px;
        }
        h2.playfair{
          font-size: 1.5em;
        }
        h3.sliderheading{
          font-size: 1.3em;
        }
      }
    </style>
<?php elseif($title == 'Luxury Cars Description') : ?>
    <style>
/*navigation*/
      nav{
        margin-bottom: -90px;
      }
/*header*/    
      header{
        background-image: url(images/bgimage2.jpg);
        background-size: cover;
        background-position: center;
        min-height: 350px;
        
      }
      header .wrapper{
        padding-top: 100px;
      }
      h1.first_heading{
        font-size: 2.6em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin-top: 60px;
        margin-bottom: 0px;
      }
      header div.slogan{
        width: 380px;
      }
      header p{
        font-size: 14px;
        color: #888;
        font-weight: 600;
        line-height: 1.6em;
        margin-bottom: 50px;
      }
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 50px 0px;
      }
      div#single_record{
        width: 100%;
        min-height: 450px;
        background-color: #fff;
        position: relative;
        box-sizing: border-box;
        padding: 0px 20px 70px 20px;
        box-shadow: 0px 1px 3px rgba(0,0,0,0.4);
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
      }
      div#record_header{
        margin: 0px -20px;
        background-color: #0e0e0e;
        margin-bottom: 20px;
        padding: 1px 20px;
      }
      div#photo{
        float: right;
        width: 540px;
        margin-bottom: 20px;
        position: relative;
      }
      #single_record img{
        width: 100%;
        height: auto;
      }
      div#left_arrow,
      div#right_arrow{
        width: 40px;
        height: 40px;
        position: absolute;
        background-color: rgba(14,14,14,0.8);
        border-radius: 50%;
        top: 45%;
        transition: all 0.3s ease;
      }
      div#left_arrow:hover i,
      div#right_arrow:hover i{
        color: #fff;
      }
      div#left_arrow{
        left: 10px;
      }
      div#right_arrow{
        right: 10px;
      }
     i.arrow{
       font-size: 1.6em;
       position: absolute;
       top: 50%;
       left: 50%;
       -webkit-transform: translate(-50%,-50%);
       transform: translate(-50%,-50%);
     }
      div#attributes{
        padding-right: 560px;
      }
      h2.brand{
        color: #846a2a;
        text-transform: uppercase;
        font-size: 1.8em;
        font-weight: 600;
        width: 100%;
        clear: both;
        /* margin-top: 25px; */
      }
      span.header_price{
        float: right;
      }
      h3.price{
        color: #0e0e0e;
        font-weight: 700;
        margin-top: 0px;
      }
      p.attribute{
        border-bottom: 1px dotted #846a2a;
        color: #6b6969;
        font-weight: 600;
      }
      span.results{
        float: right;
        color: #0e0e0e;
      }
      p.description{
        color: #0e0e0e;
        font-size: 0.9em;
        line-height: 2em;
        font-weight: 600;
        clear: both;
        margin: 20px 0px;
      }
      i{
        color: #846a2a;
      }
      textarea{
        width: 100%;
        min-height: 90px;
      }
      hr{
        border: none;
        border-top: 1px dotted #846a2a;

      }
      p.message{
      }
      .link a,
      input.button{
        border: 2px solid #846a2a;
        border-radius: 20px;
        padding: 8px 25px;
        color: #846a2a;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 600;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
      }
      input.button{
        font-family: Montserrat, Arial, Helvetica, sans-serif;
        margin-right: 1em;
        background-color: #fff;
      }
      input.button.submit{
        background-color: #846a2a;
        color: #fff;
      }
      input.button.submit:hover{
        background-color: #0e0e0e;
        border-color: #0e0e0e;
        color: #846a2a; 
      }
      a#link_testdrive{
        float: left;
        border-color: #0e0e0e;
        background-color: #0e0e0e;
        color: #846a2a;
      }
      a#link_testdrive:hover,
      input.button:hover{
        border-color: #846a2a;
        background-color: #846a2a;
        color: #fff;
      }
      a#link_leave_review,
      a#link_see_reviews{
        float: right;
        margin-left: 10px;
      }
      a#link_leave_review:hover,
      a#link_see_reviews:hover{
        color:  #fff;
        background-color: #846a2a;
      }
      .leave_review_hidden,
      .read_reviews_hidden {
        display: none;
      }
      .leave_review_hidden.visible,
      .read_reviews_hidden.visible {
        display: block;
      }
/*Media Quaries*/      
      @media screen and (max-width: 959px){
        div.adds{
          justify-content: space-around;
        }
        section .wrapper{
          padding-right: 0px;
          padding-left: 0px;
        }
      }
      @media screen and (max-width: 850px){
        div#photo{
          width: 450px;
        }
        div#attributes{
          padding-right: 470px;
        }
        p.attribute{
          font-size: 0.9em;
          line-height: 1em;
        }
        h2.brand{
          font-size: 1.5em;
        }
      }
      @media screen and (max-width: 730px){
        div#single_record{
          width: 90%;
          margin: 0px auto;
        }
        h2.brand{
          font-size: 1.3em;
        }
        div#photo{
          width: 100%;
        }
        div#attributes{
          width: 100%;
          padding-right: 0px;
        }
        p.attribute{
          font-size: 1em;
          line-height: 1.2em;
        }
        .link a{
          font-size: 0.8em;
          padding: 6px 15px;
        }
      }
      @media screen and (max-width: 620px){
        h1.first_heading{
          font-size: 2em;
          margin-top: 40px;
        }
        div#single_record{
          width: 100%;
        }
      }
      @media screen and (max-width: 500px){
        span.header_price{
          display: none;          
        }
        h2.brand{
          font-size: 1.2em;
        }
        a#link_testdrive,
        a#link_leave_review,
        a#link_see_reviews{
          float: none;
          display: block;
          width: 90%;
          text-align: center;
          margin: 10px auto;
        }
        div#single_record{
          padding-bottom: 10px;
        }
      }

      @media screen and (max-width: 440px){
        header div.slogan{
          width: 100%;
        }
      }
    </style>
<?php elseif($title == 'Luxury Cars Rent') : ?>
    <style>
/*navigation*/
      nav{
        margin-bottom: -90px;
      }
/*header*/    
      header{
        background-image: url(images/bgimage3.jpg);
        background-size: cover;
        background-position: center;
        min-height: 350px;
      }
      header .wrapper{
        padding-top: 100px;
      }
      h1.first_heading{
        font-size: 2.6em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin-top: 60px;
        margin-bottom: 0px;
      }
      header div.slogan{
        width: 380px;
      }
      header p{
        font-size: 14px;
        color: #888;
        font-weight: 600;
        line-height: 1.6em;
        margin-bottom: 50px;
      }
     
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 60px 1px;
        
      }
      section .wrapper{
        background-color: #e4e4e4;
      }
      div.sale{
        width: 960px;
        box-shadow: 0px 1px 6px rgba(0,0,0,0.4);
        background-color: #fff;
        margin-bottom: 50px;
        /*padding-bottom: 50px;*/
        position: relative;
        box-sizing: border-box;
      }
      /*image div*/
      div.image_container{
        position: relative;
        margin-bottom: -4px;
        background-size: cover;
        background-position: center;
      }
      
      div.image_container img{
        width: 100%;
        height: inherit;
        opacity: 0;
      }
      h2.brandtop{
        color: #fff;
        text-transform: uppercase;
        font-size: 1.8em;
        font-weight: 600;
        position: absolute;
        top: 0px;
        left: 30px;
        text-shadow: 0px 0px 5px #000;
      }
      div.price{
        position: absolute;
        right: 30px;
        background-color: #846a2a;
        bottom: -30px;
        color: #fff;
        font-size: 1.5em;
        font-weight: 600;
        padding: 18px;
      }
      /*content div*/
      div.content_container{
        border: 1px solid #846a2a;
        padding-left: 30px;
        padding-right: 30px;
        box-sizing: border-box;
      }
      h2.brand{
        color: #0e0e0e;
        text-transform: uppercase;
        font-size: 1.2em;
        font-weight: 700;
        margin-top: 25px;
      }
      p.description{
        color: #6b6969;
        font-size: 0.9em;
        font-weight: 600;
        line-height: 1.5em;
        margin-bottom: 0px;
      }
      h3.year{
        color: #0e0e0e;
        float: left;
        font-size: 1.2em;
        font-weight: 700;
      }
      .link a{
        float: right;
        border: 2px solid #846a2a;
        border-radius: 20px;
        padding: 8px 25px;
        color: #846a2a;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 600;
        margin-top: -10px;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
      }
      .link a:hover{
        background-color: #0e0e0e;
        border-color: #0e0e0e;
        color: #fff;
      }
      
      p.clear{
        clear: both;
      }
      /*link for more pages*/
      p.load_more{
        text-align: center;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        margin-bottom: 0px;
      }
      p.load_more a{
        text-decoration: none;
        color: #666;
        font-size: 1em;
        font-weight: 600;
      }
      p.load_more a:hover{
        color: #aaa;
      }
/*Media Quaries*/
      @media screen and (max-width: 960px){
        div.sale{
          width: 100%;
        }
        div.image_container{
          width: 100%;
        }
        div.content_container{
          width: 100%;
        }
      }
      @media screen and (max-width: 740px){
        h2.brandtop{
          font-size: 1.5em;
        }
        div.price{
          padding: 12px;
          bottom: -10px;
        }
      }
      @media screen and (max-width: 580px){
        h1.first_heading{
          font-size: 2em;
          margin-top: 30px;
        }
        h2.brandtop{
          font-size: 1.3em;
          top: 0px;
        }
        h2.brand{
          font-size: 1em;
        }
        div.price{
          font-size: 1em;
        }
        p.description{
          font-size: 0.8em;
        }
      }
      @media screen and (max-width: 440px){
        header div.slogan{
          width: 100%;
        }
        div.content_container{
          padding-left: 20px;
          padding-right: 20px;
        }
        h2.brandtop{
          font-size: 1em;
          left: 20px;
          top: -5px;
        }
        h3.year{
          font-size: 1em;
        }
        .link a{
          font-size: 0.8em;
        }
        div.price{
          padding: 8px;
          right: 20px;
        }
      }
    </style>
<?php elseif($title == 'Luxury Cars Sale') : ?>
    <style>
/*navigation*/
      nav{
        margin-bottom: -90px;
      }
/*header*/    
      header{
        background-image: url(images/bgimage2.jpg);
        background-size: cover;
        background-position: center;
        min-height: 350px;
        
      }
      header .wrapper{
        padding-top: 100px;
      }
      h1.first_heading{
        font-size: 2.6em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin-top: 60px;
        margin-bottom: 0px;
      }
      header div.slogan{
        width: 380px;
      }
      header p{
        font-size: 14px;
        color: #888;
        font-weight: 600;
        line-height: 1.6em;
        margin-bottom: 50px;
      }
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 60px 0px;
      }
      section .wrapper{
        /*background-color: #fff;*/
      }
      div.adds{
        display: flex;
        flex-flow: row wrap;
        justify-content: space-around;
        
      }
      div.sale{
        float: left;
        width: 300px;
        height: 350px;
        background-color: #fff;
        margin-bottom: 50px;
        position: relative;
        box-shadow: 0px 1px 3px rgba(0,0,0,0.4);
        -webkit-transition: all 0.3s ease;
        transition: all 0.3s ease;
      }
      div.sale:hover{
        -webkit-transform: translateY(-10px);
        transform: translateY(-10px);
        box-shadow: 0px 1px 10px rgba(0,0,0,1);
      }
      h2.brand{
        color: #0e0e0e;
        text-transform: uppercase;
        font-size: 1em;
        font-weight: 700;
        margin-left: 20px;
        margin-top: 25px;
      }
      p.description{
        color: #6b6969;
        margin-left: 20px;
        font-size: 0.9em;
        font-weight: 600;
      }
      h3.year{
        color: #0e0e0e;
        margin-left: 20px;
        margin-top: 12px;
        float: left;
        font-size: 1em;
        font-weight: 700;
      }
      .link a{
        float: right;
        border: 2px solid #846a2a;
        border-radius: 20px;
        padding: 8px 25px;
        color: #846a2a;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        font-weight: 600;
        margin-right: 10px;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
      }
      .link a:hover{
        background-color: #0e0e0e;
        border-color: #0e0e0e;
        color: #fff;
      }
      div.price{
        position: absolute;
        right: 10px;
        background-color: #846a2a;
        top: 120px;
        color: #fff;
        font-size: 1em;
        font-weight: 600;
        padding: 14px;
      }
      p.pages{
        text-align: center;
        letter-spacing: 0.2em;
        color: #666;
        text-transform: uppercase;
      }
      p.pages a{
        text-decoration: none;
        color: #666;
        font-size: 1.1em;
        font-weight: 600;
        margin: 0 0.5em;
      }
      p.pages a:hover{
        color: #aaa;
      }
/*Media Quaries*/      
      @media screen and (max-width: 959px){
        div.adds{
          justify-content: space-around;
        }
        section .wrapper{
          padding-right: 0px;
          padding-left: 0px;
        }
      }
      @media screen and (max-width: 620px){
        h1.first_heading{
          font-size: 2em;
          margin-top: 40px;
        }
      }  
      @media screen and (max-width: 440px){
        header div.slogan{
          width: 100%;
        }
        p.pages a{
          font-size: 0.9em;
          margin: 0 0.3em;
        }
      }
    </style>
<?php elseif($title == 'Luxury Cars Testdrive') : ?>
    <style>
/*navigation*/
      nav{
        margin-bottom: -90px;
      }
/*header*/    
      header{
        background-image: url(images/bgimage5.jpg);
        background-size: cover;
        background-position: center;
        min-height: 350px;
      }
      header .wrapper{
        padding-top: 100px;
      }
      h1.first_heading{
        font-size: 2.6em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin-top: 60px;
        margin-bottom: 0px;
      }
      header div.slogan{
        width: 380px;
      }
      header p{
        font-size: 14px;
        color: #888;
        font-weight: 600;
        line-height: 1.6em;
        margin-bottom: 50px;
      }
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 60px 0px;
      }
      section .wrapper{
        background-color: #fff;
        padding-left: 30px;
        padding-bottom: 30px;
        padding-right: 20px;
      }
    /*Form*/
      section h1{
        color: #0e0e0e;
        letter-spacing: 0em;
        margin-top: 50px;
      }
      section h2{
        color: #0e0e0e;
        font-size: 1.2em;
        font-weight: 400;
        letter-spacing: 0em;
        margin-bottom: 40px;
      }
      fieldset{
        width: 380px;
        border: none;
        float: left;
        padding: 0px;
      }
      fieldset + fieldset{
        float: right;
      }
      legend{
        padding: 0px;
        margin-bottom: 20px;
        font-weight: 600;
      }
      .clear_both{
        clear: both;
      }
      label{
        font-size: 0.9em;
        clear: both;
        width: 140px;
        display: block;
        float: left;
      }
      input, textarea{
        width: 230px;
        height: 24px;
        border: 1px solid #d4d4d4;
      }
      input:hover, textarea:hover{
        background-color: #e4e4e4;
        border: 1px solid #0e0e0e;
      }
      input[type="submit"],
      input[type="reset"]{
        font-family: Montserrat, Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        background-color: #846a2a;
        width: 120px;
        border-radius: 20px;
        height: 38px;
        font-size: 0.9em;
        color: #fff;
        text-align: center;
        margin: 40px 0px;
        margin-bottom: 30px;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
      }
      input[type="reset"]{
        background-color: #e4e4e4;
        color: #0e0e0e;
        margin-left: 20px;
      }
      input[type="submit"]:hover,
      input[type="reset"]:hover{
        background-color: #0e0e0e;
        color: #6b6969;
      }
/*media quaries*/      
      @media screen and (max-width: 850px){
        fieldset{
          width: 100%;
        }
        fieldset:first-of-type{
          margin-bottom: 30px;
        }
        label{
          width: 25%;
        }
        input, textarea{
          width: 70%;
        }
      }
      @media screen and (max-width: 630px){
        h1.first_heading{
          font-size: 2em;
          margin-top: 40px;
        }
      }  
      @media screen and (max-width: 580px){
        section{
          padding-right: 20px;
          padding-left: 20px;
        }
        section .wrapper{
          padding-right: 20px;
          padding-left: 20px;
        }
        label{
          width: 100%;
        }
        input, textarea{
          width: 100%;
        }
      }
      @media screen and (max-width: 440px){
        header div.slogan{
          width: 100%;
        }
      }
    </style>
<?php elseif($title == 'Luxury Cars Welcome') : ?>
    <style>
/*navigation*/
      nav{
        margin-bottom: -90px;
      }
/*header*/    
      header{
        background-image: url(images/bgimage7.jpg);
        background-size: cover;
        background-position: center;
        min-height: 350px;
      }
      header .wrapper{
        padding-top: 100px;
      }
      h1.first_heading{
        font-size: 2.6em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin-top: 60px;
        margin-bottom: 0px;
      }
      header div.slogan{
        width: 380px;
      }
      header p{
        font-size: 14px;
        color: #888;
        font-weight: 600;
        line-height: 1.6em;
        margin-bottom: 50px;
      }
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 60px 0px;
      }
      section .wrapper{
        background-color: #fff;
        padding-left: 130px;
        padding-bottom: 40px;
        padding-right: 130px;
      }
    /*Output*/
      section h1{
        color: #0e0e0e;
        letter-spacing: 0em;
        margin-top: 50px;
        text-align: center;
      }
      section h2{
        color: #0e0e0e;
        font-size: 1.2em;
        font-weight: 400;
        letter-spacing: 0em;
        margin-bottom: 40px;
        text-align: center;
      }
      .clear_both{
        clear: both;
      }
      p.output{
        border-bottom: 1px dotted #0e0e0e;
      }
      p.output span{
        float: right;
      }
      p#link{
        text-align: center;
        margin-top: 40px;
      }
      a#browse,
      a#reviews{
        border: 2px solid #846a2a;
        border-radius: 20px;
        padding: 8px 25px;
        color: #846a2a;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        font-weight: 600;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
        margin: 10px;      
      }
      a#browse:hover,
      a#reviews:hover{
        color:  #fff;
        background-color: #846a2a;
      }
      a.see_details{
        background-color: #0e0e0e;
        color: #846a2a;
        border-radius: 20px;
        padding: 6px 20px;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        font-weight: 600;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
        font-size: 0.8em;
        display: inline-block;
        margin-bottom: 0.8em;
      }
      a.see_details:hover{
        background-color: #846a2a;
        color: #fff;
      }

      div.my_reviews{
        display: none;
      }
      div.my_reviews.visible{
        display: block;
      }
/*media quaries*/      
      @media screen and (max-width: 850px){
        fieldset{
          width: 100%;
        }
        fieldset:first-of-type{
          margin-bottom: 30px;
        }
        label{
          width: 25%;
        }
        input, textarea{
          width: 70%;
        }
        p.errors{
          padding-right: 40px;
        }
        section .wrapper{
          padding-left: 30px;
          padding-bottom: 50px;
          padding-right: 30px;
        }
      }
      @media screen and (max-width: 630px){
        h1.first_heading{
          font-size: 2em;
          margin-top: 40px;
        }
      }  
      @media screen and (max-width: 580px){
        label{
          width: 100%;
        }
        input, textarea{
          width: 100%;
        }
        p.errors{
          padding-right: 10px;
        }
        a#browse,
        a#reviews{
          display: block;
          width: 60%;
          margin: 0 auto;
          margin-bottom: 1em;
        }
      }
      @media screen and (max-width: 440px){
        header div.slogan{
          width: 100%;
        }
      }
    </style>
<?php elseif($title == 'Luxury Cars Register' || $title == 'Luxury Cars Login' ) : ?>
    <style>
/*navigation*/
      nav{
        margin-bottom: -90px;
      }
/*header*/    
      header{
        background-image: url(images/bgimage6.jpg);
        background-size: cover;
        background-position: center;
        min-height: 350px;
      }
      header .wrapper{
        padding-top: 100px;
      }
      h1.first_heading{
        font-size: 2.6em;
        font-weight: 400;
        letter-spacing: 0em;
        text-transform: uppercase;
        margin-top: 60px;
        margin-bottom: 0px;
      }
      header div.slogan{
        width: 380px;
      }
      header p{
        font-size: 14px;
        color: #888;
        font-weight: 600;
        line-height: 1.6em;
        margin-bottom: 50px;
      }
/*section*/
      section{
        background-color: #e4e4e4;
        padding: 60px 0px;
      }
      section .wrapper{
        background-color: #fff;
        padding-left: 30px;
        padding-bottom: 30px;
        padding-right: 20px;
      }
    /*Form*/
      section h1{
        color: #0e0e0e;
        letter-spacing: 0em;
        margin-top: 50px;
      }
      section h2{
        color: #0e0e0e;
        font-size: 1.2em;
        font-weight: 400;
        letter-spacing: 0em;
        margin-bottom: 40px;
      }
      fieldset{
        width: 380px;
        border: none;
        float: left;
        padding: 0px;
      }
      fieldset + fieldset{
        float: right;
      }
      legend{
        padding: 0px;
        margin-bottom: 20px;
        font-weight: 600;
      }
      .clear_both{
        clear: both;
      }
      label{
        font-size: 0.9em;
        clear: both;
        width: 140px;
        display: block;
        float: left;
      }
      input, textarea{
        width: 230px;
        height: 24px;
        border: 1px solid #d4d4d4;
      }
      input:hover, textarea:hover{
        background-color: #e4e4e4;
        border: 1px solid #0e0e0e;
      }
      input[type="submit"],
      input[type="reset"]{
        font-family: Montserrat, Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        background-color: #846a2a;
        width: 120px;
        border-radius: 20px;
        height: 38px;
        font-size: 0.9em;
        color: #fff;
        text-align: center;
        margin: 40px 0px;
        margin-bottom: 30px;
        -webkit-transition: all 0.2s ease;
        transition: all 0.2s ease;
      }
      input[type="reset"]{
        background-color: #e4e4e4;
        color: #0e0e0e;
        margin-left: 20px;
      }
      input[type="submit"]:hover,
      input[type="reset"]:hover{
        background-color: #0e0e0e;
        color: #6b6969;
      }
      p.errors{
        text-align: right;
        color: #f00;
        font-size: 0.75em;
        margin-top: 0px;
        padding-right: 10px;
      }
/*media quaries*/      
      @media screen and (max-width: 850px){
        fieldset{
          width: 100%;
        }
        fieldset:first-of-type{
          margin-bottom: 30px;
        }
        label{
          width: 25%;
        }
        input, textarea{
          width: 70%;
        }
        p.errors{
          padding-right: 40px;
        }
      }
      @media screen and (max-width: 630px){
        h1.first_heading{
          font-size: 2em;
          margin-top: 40px;
        }
      }  
      @media screen and (max-width: 580px){
        section{
          padding-right: 20px;
          padding-left: 20px;
        }
        section .wrapper{
          padding-right: 20px;
          padding-left: 20px;
        }
        label{
          width: 100%;
        }
        input, textarea{
          width: 100%;
        }
        p.errors{
          padding-right: 10px;
        }
      }
      @media screen and (max-width: 440px){
        header div.slogan{
          width: 100%;
        }
      }
    </style>    
<?php endif ; ?>
	

