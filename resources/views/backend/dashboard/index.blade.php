@extends('backend.components.index')
@section('title', 'Dashboard')
@section('content')
    <div class="col-md-9 content">
        @include('backend.components.navbar')
        
        <div class="list_of_members">
            <div class="sales">
                <div class="icon">
                    <i class="dollar"></i>
                </div>
                <div class="icon-text">
                    <h3>15896</h3>
                    <p>Sales</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="new-users">
                <div class="icon">
                    <i class="user1"></i>
                </div>
                <div class="icon-text">
                    <h3>5356</h3>
                    <p>New Users</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="orders">
                <div class="icon">
                    <i class="order"></i>
                </div>
                <div class="icon-text">
                    <h3>26856</h3>
                    <p>New Orders</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="visitors">
                <div class="icon">
                    <i class="visit"></i>
                </div>
                <div class="icon-text">
                    <h3>85k</h3>
                    <p>Visits</p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="total-sales">
            <div class="user-trends">
                <div class="alert-close7"> </div>

                <canvas id="bar" height="340" width="780"></canvas>
                <script>
                    var barChartData = {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [{
                                fillColor: "rgba(255, 137, 167, 0.78)",
                                strokeColor: "rgba(220,220,220,1)",
                                data: [65, 59, 90, 81, 56, 55, 40]
                            },
                            {
                                fillColor: "rgba(140, 145, 255, 0.69)",
                                strokeColor: "rgba(151,187,205,1)",
                                data: [28, 48, 40, 19, 96, 27, 100]
                            }
                        ]

                    }

                    var myLine = new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
                </script>
            </div>
            <div class="to-do">
                <div class="alert-close5"> </div>
                <h3>To-Do</h3>
                <div class="checkbox-form">
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Do
                            the dishes.</label>
                    </div>
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i>
                            </i>Hit the gym.</label>
                    </div>
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i>
                            </i>Walk the dog.</label>
                    </div>
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i>
                            </i>Get wireframing!</label>
                    </div>
                    <div class="check">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i>
                            </i>Talk to the cat.</label>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="total-world">
            <div class="world-map">
                <div class="alert-close6"> </div>
                <h3>Sales around world</h3>
                <p><span class="color1"></span>40%<span class="color2"></span>12%<span class="color3"></span>11%<span
                        class="color4"></span>10%<span class="color5"></span>18%
                </p>
                <div class="clearfix"></div>
                <div id="vmap" style="width: 600px; height: 400px;"></div>
            </div>
            <div class="site-report">
                <div class="alert-close3"> </div>
                <h3>Site Report</h3>
                <div class="skills-top">
                    <h5>Sales</h5>
                    <h4>45%</h4>
                    <div class="clearfix"></div>
                    <div class="skills">
                        <div class="skill" style="width:45%"></div>
                    </div>
                </div>
                <div class="skills-top">
                    <h5>Revenue</h5>
                    <h4>68%</h4>
                    <div class="clearfix"></div>
                    <div class="skills">
                        <div class="skill1" style="width:68%"></div>
                    </div>
                </div>
                <div class="skills-top">
                    <h5>New Orders</h5>
                    <h4>89%</h4>
                    <div class="clearfix"></div>
                    <div class="skills">
                        <div class="skill2" style="width:89%"></div>
                    </div>
                </div>
                <p>It is a long established fact that a re-ader will be distracted by the readable content of a page
                    when looking at its layout.</p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="calenders">
            <div class="calender-left">
                <div class="alert-close"> </div>
                <h3>Contact form</h3>
                <form>
                    <input type="text" class="text" value="Username" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Username';}">
                    <input type="text" class="text" value="Subject" onfocus="this.value = '';"
                        onblur="if (this.value == '') {this.value = 'Subject';}">
                    <textarea value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
                    <input type="submit" value="SEND" />
                </form>
            </div>
            <div class="calender-right">
                <div class="alert-close1"> </div>
                <h3>Calendar</h3>
                <div class="column_right_grid calender">
                    <div class="cal1">
                        <div class="clndr">
                            <div class="clndr-controls">
                                <div class="clndr-control-button">
                                    <p class="clndr-previous-button">previous</p>
                                </div>
                                <div class="month">March 2014</div>
                                <div class="clndr-control-button rightalign">
                                    <p class="clndr-next-button">next</p>
                                </div>
                            </div>
                            <table class="clndr-table" border="0" cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr class="header-days">
                                        <td class="header-day">Sun</td>
                                        <td class="header-day">Mon</td>
                                        <td class="header-day">Tu</td>
                                        <td class="header-day">We</td>
                                        <td class="header-day">T</td>
                                        <td class="header-day">Fr</td>
                                        <td class="header-day">Su</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="day past adjacent-month last-month calendar-day-2014-02-23">
                                            <div class="day-contents">23</div>
                                        </td>
                                        <td class="day past adjacent-month last-month calendar-day-2014-02-24">
                                            <div class="day-contents">24</div>
                                        </td>
                                        <td class="day past adjacent-month last-month calendar-day-2014-02-25">
                                            <div class="day-contents">25</div>
                                        </td>
                                        <td class="day past adjacent-month last-month calendar-day-2014-02-26">
                                            <div class="day-contents">26</div>
                                        </td>
                                        <td class="day past adjacent-month last-month calendar-day-2014-02-27">
                                            <div class="day-contents">27</div>
                                        </td>
                                        <td class="day past adjacent-month last-month calendar-day-2014-02-28">
                                            <div class="day-contents">28</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-01">
                                            <div class="day-contents">1</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day past calendar-day-2014-03-02">
                                            <div class="day-contents">2</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-03">
                                            <div class="day-contents">3</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-04">
                                            <div class="day-contents">4</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-05">
                                            <div class="day-contents">5</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-06">
                                            <div class="day-contents">6</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-07">
                                            <div class="day-contents">7</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-08">
                                            <div class="day-contents">8</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day past calendar-day-2014-03-09">
                                            <div class="day-contents">9</div>
                                        </td>
                                        <td class="day past event calendar-day-2014-03-10">
                                            <div class="day-contents">10</div>
                                        </td>
                                        <td class="day past event calendar-day-2014-03-11">
                                            <div class="day-contents">11</div>
                                        </td>
                                        <td class="day past event calendar-day-2014-03-12">
                                            <div class="day-contents">12</div>
                                        </td>
                                        <td class="day past event calendar-day-2014-03-13">
                                            <div class="day-contents">13</div>
                                        </td>
                                        <td class="day past event calendar-day-2014-03-14">
                                            <div class="day-contents">14</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-15">
                                            <div class="day-contents">15</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day past calendar-day-2014-03-16">
                                            <div class="day-contents">16</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-17">
                                            <div class="day-contents">17</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-18">
                                            <div class="day-contents">18</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-19">
                                            <div class="day-contents">19</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-20">
                                            <div class="day-contents">20</div>
                                        </td>
                                        <td class="day past event calendar-day-2014-03-21">
                                            <div class="day-contents">21</div>
                                        </td>
                                        <td class="day past event calendar-day-2014-03-22">
                                            <div class="day-contents">22</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day past event calendar-day-2014-03-23">
                                            <div class="day-contents">23</div>
                                        </td>
                                        <td class="day past calendar-day-2014-03-24">
                                            <div class="day-contents">24</div>
                                        </td>
                                        <td class="day today calendar-day-2014-03-25">
                                            <div class="day-contents">25</div>
                                        </td>
                                        <td class="day calendar-day-2014-03-26">
                                            <div class="day-contents">26</div>
                                        </td>
                                        <td class="day calendar-day-2014-03-27">
                                            <div class="day-contents">27</div>
                                        </td>
                                        <td class="day calendar-day-2014-03-28">
                                            <div class="day-contents">28</div>
                                        </td>
                                        <td class="day calendar-day-2014-03-29">
                                            <div class="day-contents">29</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day calendar-day-2014-03-30">
                                            <div class="day-contents">30</div>
                                        </td>
                                        <td class="day calendar-day-2014-03-31">
                                            <div class="day-contents">31</div>
                                        </td>
                                        <td class="day adjacent-month next-month calendar-day-2014-04-01">
                                            <div class="day-contents">1</div>
                                        </td>
                                        <td class="day adjacent-month next-month calendar-day-2014-04-02">
                                            <div class="day-contents">2</div>
                                        </td>
                                        <td class="day adjacent-month next-month calendar-day-2014-04-03">
                                            <div class="day-contents">3</div>
                                        </td>
                                        <td class="day adjacent-month next-month calendar-day-2014-04-04">
                                            <div class="day-contents">4</div>
                                        </td>
                                        <td class="day adjacent-month next-month calendar-day-2014-04-05">
                                            <div class="day-contents">5</div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="cd-tabs">
            <nav>
                <ul class="cd-tabs-navigation">
                    <li><a data-content="fashion" href="#0">Latest Comments <i> </i></a></li>
                    <li><a data-content="cinema" href="#0" class="selected fashion1">Latest Articles<i>
                            </i></a></li>
                    <li><a data-content="television" href="#0" class="fashion2">Newest Users<i> </i></a>
                    </li>
                    <div class="clearfix"></div>
                </ul>
            </nav>
            <ul class="cd-tabs-content">
                <li data-content="fashion">
                    <div class="top-men">
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#">Fashion News</a> / by <a href="#">Jolia</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp0.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#">Technoloy News </a>/ by <a href="#">Deo</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp01.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on<a href="#"> Fashion News</a> / by <a href="#">Jolia</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </li>
                <li data-content="cinema" class="selected">
                    <div class="top-men">
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp0.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#"> Fashion News </a>/ by <a href="#">Jolia</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp01.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#">Technoloy News</a> / by <a href="#">Deo</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#"> Fashion News </a>/ by <a href="#">Jolia</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </li>
                <li data-content="television">
                    <div class="top-men">
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp01.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#">Fashion News</a> / by <a href="#">Jolia</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#">Technoloy News</a> / by <a href="#">Deo</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="men">
                            <div class="grid-men">
                                <a href="#"><img src="{{ asset('backend-tas') }}/images/pp0.jpg"
                                        class="img-responsive" alt=""> </a>
                            </div>
                            <div class="men-grid">
                                <h6>on <a href="#">Fashion News </a>/ by <a href="#">Jolia</a></h6>
                                <span>12-11-2014</span>
                                <p class="text">It is a long established fact that a reader will be distracted by
                                    the readable content of a page when looking at its layout. </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>

    </div>


@endsection
