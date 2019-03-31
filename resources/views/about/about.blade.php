@section('title', 'About')
@section('css')
    <link rel="stylesheet" href="{{ mix('css/about.css') }}">
@endsection

@extends('layouts.app')

@section('content')

<!-- About the site -->
<div class="row">    
    <h1 class="title col-12">About the site <hr></h1>
    <div class="col-12 col-lg-7">
        <p class="lead">
            This site is build upon <a href="https://laravel.com" target="_blank">Laravel's framework.</a> It is the first project build, where I am using said framework. This site was build in the first quarter of 2019. You can find, and study, this portfolio site on <a href="" target="_blank" title="Takes you to the project on GitHub">GitHub</a>. This whole project is being hosted on <a href="https://digitalocean.com" taget="_blank">DigitalOcean</a> and the domain name is bought from <a href="https://namecheap.com" target="_blank">NameCheap.</a>
        </p>

        <p class="lead">
            <b>I value your privacy!</b> Therefore, this site does not track your behavior when you're visiting. It does not store any cookies and unless your are commenting on the news stories, or portfolio projects, your IP will not be logged either. I reserve the right to log your IP address when you decide to comment on either projects or new stories on this site. I also reserve the right to <i>blacklist</i> your IP address from visiting this website again, if I find it necessary due to spam, abuse, self promotion or just typical bad behavior. 
        </p>
    </div>

    <!-- Used technologies -->
    <h3 class="title col-12 sub-title">Noticeable technologies used for this project</h3>
    <div class="technologies">
        <div class="tech-item">
            <img src="/images/sass.png" class="tech-item" title="SASS">
        </div>
        <div class="tech-item">
            <img src="/images/bootstrap.png" class="tech-item" title="Bootstrap">
        </div>
        <div class="tech-item">
            <img src="/images/digitalocean.png" class="tech-item" title="Digital Ocean">
        </div>
        <div class="tech-item">
            <img src="/images/fontawesome.jpg" class="tech-item" title="Font Awesome">
        </div>
        <div class="tech-item">
            <img src="/images/git.png" class="tech-item" title="Git">
        </div>
        <div class="tech-item">
            <img src="/images/jquery.png" class="tech-item" title="jQuery">
        </div>
        <div class="tech-item">
            <img src="/images/laravel.png" class="tech-item" title="Laravel">
        </div>
        <div class="tech-item">
            <img src="/images/npm.png" class="tech-item" title="npm">
        </div>
    </div>
</div>

<!-- About the author -->
<div class="row">
    <h1 class="title col-12">About the author<hr></h1>
    <h5 class="title col-12">A little bit more about myself!</h5>
    <div class="col-12 col-lg-3">
        <p>
            My name is Henrik and I am a developer from Denmark. I am {{12+date('y')}} summers young and I have 2 development educations in my bag - One with focus on web-development and a bachelor degree in Computer Science.
        </p>
    </div>
    <div class="col-12 col-lg-3">
        <p>
            I enjoy to travel, listen to music and socialize with good people. When the weather allows it I usually skate around on a longboard. I'm also a pretty big fan of festivals and concerts, and then I love to learn new things!
        </p>
    </div>

    <!-- Resume -->
    <h3 class="title col-12 sub-title">School & work experience</h3>
    <p class="col-12" style="margin-bottom:1rem;">If you're interested in a full version of my resume, in PDF format, it can be found <a href="https://www.slideshare.net/slideshow/embed_code/key/tMv03h5U03IGQQ" title="Takes you to my PDF resume" target="_blank">here.</a></p>
    <table class="table col-12 col-lg-7">
        <tr>
            <td>
                <h4>JKS</h4>
            </td>
            <td>
                <b>Lead PHP developer</b> 
                <br>
                JKS is the leading candidate bureau in Denmark - Twice as big as the runner up. I am very fortunate that my decisions in life has lead me to this wonderful company, with these wonderful colleagues.
            </td>
        </tr>
        <tr>
            <td>
                <h4>University of Pardubice</h4>
            </td>
            <td>
                <b>Elective studies</b>
                <br>
                Based in Czech Republic. Here I studied <i>Algorithms, Java, C#, network, Database systems & Linux.</i> I also did an intern at their university, where I helped out at the Faculty of Electrical Engineering.
            </td>
        </tr>
        <tr>
            <td>
                <h4>Zealand Business Academy</h4>
            </td>
            <td>
                <b>Bachelor in Computer Science</b>
                <br>
                Focus on application development and agile approaches. We touched on subjects such as .NET, C#, Python, PHP & Twig, REST & SOAP web-services, security, MSSQL and Azure databases.
            </td>
        </tr>
        <tr>
            <td>
                <h4>TDC</h4>
            </td>
            <td>
                <b>Fault management & development</b>
                <br>
                TDC is the largest telecommunication company in Denmark. Besides handling fault tickets I developed a logging system for my department. I left the position with a <a href="https://www.slideshare.net/slideshow/embed_code/key/IHW5A7ZAHMx3RH" title="Takes you to the recommendation" target="_blank">recommendation (DK).</a>
            </td>
        </tr>
        <tr>
            <td>
                <h4>VUC</h4>
            </td>
            <td>
                <b>Higher educational</b>
                <br>
                Part of my preparation to enroll at the Computer Science class I did a couple of higher education classes. Most noticeable was Math to a B level.
            </td>
        </tr>
        <tr>
            <td>
                <h4>Itella</h4>
            </td>
            <td>
                <b>Logistic & development</b>
                <br>
                Itella is the Finish postal service, and I had the pleasure of creating the media for their intern search campaign, along with with some smaller logistic tasks. I left Itella with a <a href="https://www.slideshare.net/slideshow/embed_code/key/iYPMPnVSw0qovJ" title="Takes you to the recommendation" target="_blank">recommendation (EN).</a>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Sykes</h4>
            </td>
            <td>
                <b>Outsourced support</b>
                <br>
                Based in Sweden. Here I worked as a technician and supporter, for both business and private customers, for some of our time biggest companies. I worked for Asus, Toshiba, Huawei and Dell.
            </td>
        </tr>
        <tr>
            <td>
                <h4>Media College Denmark</h4>
            </td>
            <td>
                <b>Web development</b>
                <br>
                A business education in web-development. Here the focus was on HTML & CSS, JavaScript & jQuery, PHP & MySQL, Apache, databases, security, designs, Adobe suite and much more.
            </td>
        </tr>
        <tr>
            <td>
                <h4>Freelance</h4>
            </td>
            <td>
                <b>sloa.dk & logicdreamdesign.com</b>
                <br>
                For many years I have been doing freelance work and I've done so with people from all over the world. I am unfortunately no longer doing freelance work because of my steady position at JKS.
            </td>
        </tr>
    </table>
</div>
@endsection
