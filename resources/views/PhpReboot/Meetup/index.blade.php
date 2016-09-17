@extends('layouts.Admin-LTE-2-3-4.master')

@section('title', 'Meetup')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('home') }}">
                <i class="fa fa-home"></i> Home
            </a>
        </li>
        <li class="active">
            <i class="fa fa-credit-card"></i> Meetup
        </li>
    </ol>
@endsection

@section('content')
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <div class="col-sm-12 col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">What are PHP Reboot meet-ups?</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                PHP reboot started as PHP developers group in Pune, India. We conduct frequent meet-ups, where developers gather for knowledge sharing sessions.<br/><br/>
                                Every meet-up have a speaker, who presents the topic followed by round of questions and answers. After presentation, we raffle out items sponsored by our sponsors. Our regular sponsors are:<br/><br/>
                                <ul>
                                    <li><strong>Jet Brains:</strong> Sponsor PHP Storm license. PHP Reboot community gets one free license every month.</li>
                                    <li><strong>Ansh Systems:</strong> Snacks and place/equipments to host meet-up.</li>
                                </ul>
                                <br/>
                                Before we finish the meet-up, we have good networking time over snacks, where everyone has a chance to interact with each other on whatever topic they prefer. Speakers of the event and many other senior developers are part of this discussions and available to help/guide anyone, who approaches them.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right col -->
        <div class="col-sm-12 col-md-6">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Next meet-up:</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> October 8th, 2016, 11 am onwards.<br/>
                                <strong>Topic:</strong> Laravel workshop.<br/>
                                <strong>How to attend:</strong> <a href="https://www.meetup.com/PHPReboot/events/230392242/" target="_blank">RSVP at meetup.com</a><br/><br/>
                                <strong>Major topic:</strong> 'Laravel'<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd.<br/>
                                <strong>Details:</strong> Well, we can't cover laravel in 45 minutes. However this meet-up is scheduled along with a workshop. <br/></br>
                                <strong>Workshop:</strong> Laravel session will be followed by an optional workshop, where we will apply what we learned, to make a small laravel based project.<br/>
                                <strong>Prerequisite for workshop:</strong> To participate in workshop, please come with fully charged laptop.
                                Also make sure it have local PHP development environment. We recommend using vagrant, virtual box with scotch 
                                box but WAMP, XAMPP, MAMP or even PHP in-build web server will also work. So minimum required softwares are: <br/>
                                <ol>
                                    <li>PHP 5.6 or PHP 7</li>
                                    <li>MySQL (or any other RDBMS like postgres, SQLite, Maria DB etc) </li>
                                    <li>Composer</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h3>Past meet-ups</h3>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Writing clean code</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> September 3rd, 2016, 11 am.<br/>
                                <strong>Major topic:</strong> SOLID principles.<br/>
                                <strong>Speaker:</strong> Surendra Shukla, Consultant, CDK Global India Pvt. Ltd.<br/>
                                <strong>Detils:</strong> S.O.L.I.D is an acronym for the first five object-oriented design(OOD) principles by Robert C. Martin.<br/>
                                These principles, when combined together, make it easy for a programmer to develop software that are easy to maintain and extend. They also make it easy for developers to avoid code smells, easily refactor code, and are also a part of the agile or adaptive software development.<br/>
                                <strong>Side talk:</strong> 'PHP QA Tools' and QA tools workshop.<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd.<br/>
                                <strong>Details:</strong> PHP QA tools are used to find code quality issues in our code. Thus, in short, they help us to improve our code quality.<br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Special meetup with Michelangelo</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> April 20, 2016, 8 pm.<br/>
                                <strong>Speaker:</strong> Michelangelo Van Dam.<br/>
                                <strong>Details:</strong> Michelangelo  a.k.a. DragonBe was in India, visiting Ansh Systems Pvt. Ltd. on official tour. We got a chance to invite him, and he agreed for a meetup, so that PHP community in Pune gets chance to meet and learn from him.</a><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Using composer effectively</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> Nov 28, 2015, 11 a.m.<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd.<br/>
                                <strong>slides:</strong> <a href="https://speakerdeck.com/kapilsharma/using-composer-effectively" target="_blank">Speaker deck</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Refactoring - Improving design of code.</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> Apr 18, 2015, 11 a.m.<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd.<br/>
                                <!--strong>slides:</strong> <a href="https://speakerdeck.com/kapilsharma/using-composer-effectively" target="_blank">Speaker deck</a-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Web security in PHP..</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> Aug 2, 2014, 11 a.m.<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd.<br/>
                                <strong>slides:</strong> <a href="http://www.slideshare.net/kapilsharmainfo/web-application-security-37610917" target="_blank">Speaker deck</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Laravel</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> June 18, 2016, 11 am.<br/>
                                <strong>Speaker:</strong> Pramod Kadam, Sr. Software Engineer, Ansh Systems Pvt. Ltd.<br/>
                                <strong>Slides:</strong> <a href="http://www.slideshare.net/PramodKadam17/laravel5-introduction-and-essentials" target="_blank">Slideshare</a><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Web Application Security</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> Feb 13, 2016, 11 a.m.<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd.<br/>
                                <strong>slides:</strong> <a href="https://speakerdeck.com/kapilsharma/web-application-security-1" target="_blank">Speaker deck</a><br/>
                                <strong>Video:</strong> <a href="https://youtu.be/6VUvZdOOFfk" target="_blank">Youtube</a><br/><br/>
                                <strong>Hacking demo:</strong> Mayur Gaud, Tech Lead, Ansh Systems Pvt. Ltd.<br/>
                                <strong>Video: </strong> <a href="https://youtu.be/6VUvZdOOFfk" target="_blank">Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">What&apos;s new in PHP 7</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> Sept 5, 2015, 11 a.m.<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd.<br/>
                                <strong>slides:</strong> <a href="https://speakerdeck.com/kapilsharma/whats-new-in-php-7" target="_blank">Speaker deck</a><br/>
                                <strong>Video:</strong> <a href="https://www.youtube.com/watch?v=5LkRbx_jt78" target="_blank">Youtube</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-warning box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Working with Git</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="pad">
                        <div class="row">
                            <div class="col-sm-12 text-justify">
                                <strong>Date &amp; time:</strong> Dec 20, 2014, 11 a.m.<br/>
                                <strong>Speaker:</strong> Kapil Sharma, Technical Architect, Ansh Systems Pvt. Ltd. & Ramesh Dahiya, Tech Lead, Ansh Systems Pvt. Ltd.<br/>
                                <strong>slides (Basics by Ramesh):</strong> <a href="https://speakerdeck.com/kapilsharma/git-basics" target="_blank">Speaker deck</a><br/>
                                <strong>Slides (Advanced by Kapil):</strong> <a href="https://speakerdeck.com/kapilsharma/git-advanced" target="_blank">Speaker deck</a><br/>
                                <strong>Workshop (by Kapil):</strong> <a href="https://github.com/kapilsharma/workingwithgit" target="_blank">GitHub</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection