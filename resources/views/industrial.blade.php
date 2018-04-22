@extends('layouts.public')

@section('content')
<br><br>
<div class="clearfix"></div>
<div class="container">
    <div class="wrapper center-block">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading active" role="tab" id="headingOne">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        7 Seg Static Pressure indicator
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature - -40°C To +125°C, Input Voltage - 180V To 240V.A.C., Operating current -100 m.A, Sensor Warm Up Time - 10 mSec to 50 mSec, Accuracy -  ±1.5 Vfss, Range - 0 mm H20 To 99 mm w c, Range For Negative- 0 To -99 mm w c, RS-485 Communication</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>Ratio Metric Output Versus Input
                                            </li>
                                            <li>Differential Type</li>
                                            <li>7-Segment Display 1 Inch</li>
                                            <li>Negative Pressure Optional</li>
                                            <li>Relay Optional</li>
                                            <li>In-Build Buzzer </li>
                                            <li>Four Functional Keys</li>
                                            <li>2-Set Point Available
                                                <ul>
                                                    <li>Low Set Point</li>
                                                    <li>High Set Point</li>
                                                </ul>
                                                    
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>Room Static Pressure Transmitter</li>
                                            <li>Filter Static Pressure Transmitter</li>
                                            <li>Clean Room Pressure indicator</li>
                                            <li>Bio-Safety Cabinet</li>
                                            <li>Laminar Flow Bench</li>
                                            <li>AHU(Air Handling Unit)</li>
                                            <li>Hatch Box</li>
                                            <li>Leak Detectors</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>Bezel Size     96X96</li>
                                            <li>Panel Cutout 92X92</li>
                                            <li>DEPTH           75mm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/industrial/7seg.jpg'); ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="model_graph">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsemodel" aria-expanded="false" aria-controls="collapseTwo">
                        PID Humidity controller
                    </a>
                </div>
                <div id="collapsemodel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="model_graph">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature - -40°C to +100°C, AT MAX 95% RH NON-CONDENSING, Input voltage-12Volts to 15Volts A.C.,Operating Current - 100 m.A,Sensor Warm Up Time - 9 mSec to 50 mSec,Accuracy -  < 3 %,Range - 0 To 99 % R.H.,RS-485 Communication</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>CAPACITIVE HUMIDITY SENSOR</li>
                                            <li>NO CALIBRATION REQUIRED</li>
                                            <li>L.C.D 16X2 With Back light </li>
                                            <li>TWO TYPES CONTROL
                                                <ul>
                                                    <li>RELAY OUTPUT</li>
                                                    <li>0-10V D.C.(PROPORTIONAL)</li>
                                                </ul>
                                            </li>
                                           
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>HVAC</li>
                                            <li>AHU(AIR HANDLING UNIT)</li>
                                            <li>CLEAN ROOM</li>
                                            <li>PHARMACEUTICAL CLEAN ROOM </li>
                                            <li>INDUSTRIAL</li>
                                            <li>AIR CONDITIONING</li>
                                            <li>ENERGY MANAGEMENT</li>
                                            <li>COLD STORAGE</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>Bezel Size     148X92</li>
                                            <li>Panel Cutout 132X84</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/industrial/humi.jpg'); ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Lcd Static Pressure indicator
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature - -40°C to +125°C, Input voltage-12Volts to 15Volts A.C.,  Operating Current - 100 m.A, Sensor Warm Up Time - 10 mSec to 50 mSec, Accuracy -  ±1.5 Vfss, Range - 0mm H20 To 99mm w c, Range for Negative- 0 To -99mm w c, RS-485 Communication</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>Silicon Piezo Resistive Pressure Sensor</li>
                                            <li>Ratio metric Output Versus Input</li>
                                            <li>Differential Type</li>
                                            <li>Durable Epoxy unibody element or Thermo Plastic</li>
                                            <li>L.C.D 16X2 With Back light</li>
                                            <li>Negative Pressure optional</li>
                                            
                                            
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>Room Static Pressure Transmitter</li>
                                            <li>Filter Static Pressure Transmitter</li>
                                            <li>Clean Room Pressure indicator</li>
                                            <li>Bio-Safety Cabinet</li>
                                            <li>Laminar Flow Bench</li>
                                            <li>AHU(Air Handling Unit)</li>
                                            <li>Hatch Box</li>
                                            <li>Leak Detectors</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>Bezel Size     48X96</li>
                                            <li>Panel Cutout 45X92</li>
                                            <li>Depth             130 mm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/industrial/stbro.jpg'); ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        PID Temperature controller
                    </a>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature - -40°C to +125°C, Input voltage- 12Volts to 15Volts A.C., Operating Current - 100 m.A, Sensor Warm Up Time - 9 mSec to 50 mSec, Accuracy -  ±1°C, Range - 0°C TO 100°C, RS-485 Communication</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>NO CALIBRATION REQUIRED
                                                
                                            </li>
                                            <li>LOW SUPPLY CURRENT</li>
                                            <li>L.C.D 16X2 With Back light </li>
                                            <li>
                                                TWO TYPES CONTROL
                                                <ul>
                                                    <li>RELAY OUTPUT</li>
                                                    <li>0-10V D.C.(PROPORTIONAL)</li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>HVAC</li>
                                            <li>INDUSTRIAL</li>
                                            <li>CLEAN ROOM</li>
                                            <li>PHARMACEUTICAL CLEAN ROOM </li>
                                            <li>AHU(AIR HANDLING UNIT)</li>
                                            <li>AIR CONDITIONING</li>
                                            <li>ENERGY MANAGEMENT</li>
                                            <li>COLD STORAGE</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>Bezel Size     148X92</li>
                                            <li>Panel Cutout 132X84</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/industrial/temp.jpg'); ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
