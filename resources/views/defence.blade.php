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
                        HUMSA-NG PROJECT
                    </a>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="sub_title">Specification</div>
                                <ul>
                                    <li>Fan and Tempraure Controller Card

                                        <ul>
                                            <li>Supply Volage Range 9V to 24V D.C.</li>
                                            <lI>Wide Temperature measurement range -40 C to +85 C</lI>
                                            <li>High current sink/source 25 mA/25 mA</li>
                                            <li>Higher Resolution analog to digital convertor.</li>
                                        </ul>
                                    </li>
                                    <li>Fan sensor Board 
                                        <ul>
                                            <li>Supply Volage Range 9V to 24V D.C.</li>
                                            <li>Wide Temperature measurement range -40 C to +85 C</li>
                                            <li>Temperature compansation over 10 C to 60 C</li>
                                            <li>perating Pressure range 0 to 400 mm H2O</li>
                                        </ul>
                                    </li>
                                    <li>Temperature Sensor Board
                                        <ul>
                                            <li>Supply Volage Range 9V to 24V D.C.</li>        
                                            <li>Wide Temperature measurement range -40 C to +85 C</li>
                                            <li>High Temperature converter accuracy ±2 C max at 25 C</li>
                                            <li>Very low supply current 35uA</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/defence/FFu.png'); ?>" class="img-responsive">
                            </div>
                            <div class="col-md-12">
                                <div class="sub_title">Features</div>
                                <ul>
                                    <li>8 Analog channel</li>
                                    <li>22 didgital channel</li>
                                    <li>Wide operating voltage 2.0V-5.5V</li>
                                    <li>Wide operatting temperature Range 0 C to +85 C</li>
                                    <li>Analog Temperature sensor can be integrated for different level of the cabinet</li>
                                    <li>Fan status indications for multiple fans </li>
                                    <li>Lcd(liquid crysatal display) for display all the status of cabinet</li>
                                    <li>Graphical Display representation of status of the cabinet</li>
                                    <li>Rs232 communication/Rs485 Communication  optional</li>
                                    <li>Custom based protocol can be design (TCP/IP UDP)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="model_graph">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsemodel" aria-expanded="false" aria-controls="collapseTwo">
                        Iss Project
                    </a>
                </div>
                <div id="collapsemodel" class="panel-collapse collapse" role="tabpanel" aria-labelledby="model_graph">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="sub_title">Specification</div>
                                <ul>
                                    <li>
                                        Fan and Tempraure Controller Card
                                        <u>
                                            <li>Supply Volage Range 9V to 24V D.C.</li>
                                            <li>Wide Temperature measurement range -40 C to +85 C</li>
                                            <li>High current sink/source 25 mA/25 mA</li>
                                            <li>Higher Resolution analog to digital convertor.</li>
                                        </u>
                                    </li>
                                    <li>Fan sensor Board 
                                        <ul>
                                            <li>Supply Volage Range 9V to 24V D.C.</li>
                                            <li>Wide Temperature measurement range -40 C to +85 C</li>
                                            <li></li>
                                        </ul>
                                    </li>
                                    <li>Temperature Sensor Board
                                        <ul>
                                            <li>Supply Volage Range 9V to 24V D.C.</li>
                                            <li>Wide Temperature measurement range -40 C to +85 C</li>
                                            <li>High Temperature converter accuracy ±2 C max at 25 C</li>
                                            <li>Very low supply current 35uA</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/defence/iss.jpg'); ?>" class="img-responsive">
                            </div>
                            <div class="col-md-12">
                                <div class="sub_title">Features</div>
                                <ul>
                                    <li>12-Bit, Up to 13-Channel Analog-to-Digital Converter Module (A/D):
                                        <ul>
                                            <li>Auto-acquisition capability</li>
                                            <li>Conversion available during Sleep mode</li>
                                            <li>Dual Analog Comparators with Input Multiplexing</li>
                                            <li>High-Current Sink/Source 25 mA/25 mA</li>
                                            <li>Three Programmable External Interrupts</li>
                                            <li>Four Input Change Interrupts</li>
                                            <li>Up to Two Capture/Compare/PWM (CCP)</li>
                                            <li>Modules, One with Auto-Shutdown (28-pin devices)</li>
                                            <li>Enhanced Capture/Compare/PWM (ECCP) module</li>
                                            <li>One, two or four PWM outputs</li>
                                            <li>Selectable polarityRs232 communication/Rs485</li>
                                        </ul>
                                    </li>
                                    <li>Communication  optional</li>
                                    <li>Custom based protocol can be design (TCP/IP UDP)</li>

                                </ul>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Mmic Pcb
                    </a>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="sub_title">Features</div>
                                <ul>
                                    <li>10-bit resolution and 14 channels</li>
                                    <li>12-bit resolution and 28 channels</li>
                                    <li>8-bit Timer/Counter with 8-bit</li>
                                    <li>24/35 I/O Pins with Individual Direction Control:</li>
                                    <li>High current source/sink for direct LED drive</li>
                                    <li>Interrupt-on-Change pin</li>
                                    <li>Individually programmable weak pull-ups</li>
                                    <li>Ultra Low-Power Wake-up (ULPWU)</li>
                                    <li>Power-Managed modes:
                                        <ul>
                                            <li>Run: CPU on, peripherals on</li>
                                            <li>Idle: CPU off, peripherals on</li>
                                            <li>Sleep: CPU off, peripherals off</li>
                                        </ul>

                                    </li>
                                    <li>Two-Speed Oscillator Start-up</li>
                                    <li>Fail-Safe Clock Monitor</li>
                                    <li>Power-Saving Peripheral Module Disable (PMD)</li>
                                    <li>Ultra Low-Power Wake-up</li>
                                    <li>Fast Wake-up, 1 s Typical</li>
                                    <li>Low-Power WDT, 300 nA Typical</li>
                                    <li>Ultra Low 50 nA Input Leakage</li>
                                    <li>Run mode Currents Down to 5.5 A, Typical</li>
                                    <li>Idle mode Currents Down to 1.7 A Typical</li>
                                    <li>Sleep mode Currents Down to Very Low 20 nA,</li>
                                    <li>Rs232 Custom based Protocol TCP/IP/UDP</li>
                                </ul>

                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/defence/mmic.png'); ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        USB SOUND CARD SPEAKER
                    </a>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="sub_title">Features</div>
                                <ul>
                                    <li>MOUNTING OPTION: USB INTERFACE</li>
                                    <li>CONTROLLER: AUDIO CHIPSET</li>
                                    <li>POWER REQUIREMENT: INPUT 5V FROM USB</li>
                                    <li>OUTPUT POWER: 3 WATTS MAX</li>

                                </ul>

                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo asset('system_images/defence/sound.jpg'); ?>" class="img-responsive">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
