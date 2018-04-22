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
                        Basic Water level controller
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature - 0°C to +85°C, Input Voitage 180 to 230 AC Operating current -100 m.A</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>Dry Run Protection For Motor
                                                <ul>
                                                    <li>No Water In Sump</li>
                                                </ul>
                                            </li>
                                            <li>No Over Flow</li>
                                            <li>24 Hr Water</li>
                                            <li>Less Scaling In Sensors</li>
                                            <li>Low Power Consumption</li>
                                            <li>Indication L.E.D. 
                                                <ul>
                                                    <li>Motor On Status</li>    
                                                    <li>Sump Empty</li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>Residence</li>
                                            <li>Industries</li>
                                            <li>Swimming Pool</li>
                                            <li>Apartments</li>
                                            <li>Hotels</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>50X140X60</li>
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
                        Water Level Controller Model Graphics
                    </a>
                </div>
                <div id="collapsemodel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="model_graph">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature -40* C to +100* C, Input Voitage 180 to 230 AC Operating current -100 m.A</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>Graphical Display 128X64</li>
                                            <li>Animated Display</li>
                                            <li>Dry Run Protection For Motor
                                                <ul>
                                                    <li>No Water In Sump</li>
                                                    <li>Foot Valve Failure In Sump</li>
                                                </ul>
                                            </li>
                                            <li>No Over Flow</li>
                                            <li>24 Hr Water</li>
                                            <li>Less Scaling In Sensors</li>
                                            <li>Low Power Consumption</li>
                                            <li>Display Indication 
                                                <ul>
                                                    <li>Over Head Tank Status</li>    
                                                    <li>Sump Status</li>
                                                    <li>Water Fall Inside Tank</li>
                                                    <li>Dry Run</li>
                                                    <li>Main Voltage Condition</li>
                                                </ul>
                                            </li>
                                            <li>Over Voltage Protection</li>
                                            <li>Under Voltage Protection</li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>Residence</li>
                                            <li>Industries</li>
                                            <li>Swimming Pool</li>
                                            <li>Apartments</li>
                                            <li>Hotels</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>150X190X60</li>
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
                        Water Level Controller Model LCD
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature - 0°C to +85°C, Input voltage-180 To 230 A.C.,  Operating current -100 m.A</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>Large Display 20X4</li>
                                            <li>Dry Run Protection For Motor
                                                <ul>
                                                    <li>No Water In Sump</li>
                                                    <li>Foot Valve Failure In Sump</li>
                                                </ul>
                                            </li>
                                            <li>No Over Flow</li>
                                            <li>24 Hr Water</li>
                                            <li>Less Scaling In Sensors</li>
                                            <li>Low Power Consumption</li>
                                            <li>Display Indication 
                                                <ul>
                                                    <li>Over Head Tank Status</li>    
                                                    <li>Sump Status</li>
                                                    <li>Water Fall Inside Tank</li>
                                                    <li>Dry Run</li>
                                                    <li>Main Voltage Condition</li>
                                                </ul>
                                            </li>
                                            <li>Over Voltage Protection</li>
                                            <li>Under Voltage Protection</li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>Residence</li>
                                            <li>Industries</li>
                                            <li>Swimming Pool</li>
                                            <li>Apartments</li>
                                            <li>Hotels</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>150X190X60</li>
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
                        Water Level Controller Model LED
                    </a>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub_title">Specification</div>
                                <p>Operating Temperature - 0°C to +85°C, Input voltage-180 To 230 A.C.,  Operating current -100 m.A</p>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="sub_title">Features</div>
                                        <ul>
                                            <li>Dry Run Protection For Motor
                                                <ul>
                                                    <li>No Water In Sump</li>
                                                    <li>Foot Valve Failure In Sump</li>
                                                </ul>
                                            </li>
                                            <li>No Over Flow</li>
                                            <li>24 Hr Water</li>
                                            <li>Less Scaling In Sensors</li>
                                            <li>Low Power Consumption</li>
                                            <li>
                                                Indication L.E.D.
                                                <ul>
                                                    <li>Over Head Tank Status</li>
                                                    <li>Sump Status</li>
                                                    <li>Water Fall Inside Tank</li>
                                                    <li>Dry Run</li>
                                                </ul>
                                            </li>
                                            <li>Over Voltage Protection</li>
                                            <li>Under Voltage Protection</li>
                                            <li>Auto Fill When Mains V/G Regain</li>
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="sub_title">Applications</div>
                                        <ul>
                                            <li>Residence</li>
                                            <li>Industries</li>
                                            <li>Swimming Pool</li>
                                            <li>Apartments</li>
                                            <li>Hotels</li>
                                        </ul>
                                        <div class="sub_title">Dimensions</div>
                                        <ul>
                                            <li>150X190X60</li>
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
