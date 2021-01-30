@extends('layouts.app')
@section('page')
<div class="container">
    <br>
    <br>
    <form action="{{url('city')}}" method="post">
        @csrf
        Enter city :
        <input type="text" name="city">
        <button type="submit">Submit</button>
    </form>
    <br>
    <br>
    <div class="col-sm-12">
        <div class="panel panel-default col-sm-4" id="resultPannel">
            <div id="firstCityPannel" style="padding:125px">
                <i class='far fa-plus-square' id="firstCity" style='font-size:56px'></i>
            </div>
        </div>
        <div class="panel panel-default col-sm-4" id="resultPannel2">
            <div id="firstCityPannel2" style="padding:125px">
                <i class='far fa-plus-square' id="firstCity2" style='font-size:56px'></i>
            </div>
        </div>
        <div class="panel panel-default col-sm-4" id="resultPannel3">
            <div id="firstCityPannel3" style="padding:125px">
                <i class='far fa-plus-square' id="firstCity3" style='font-size:56px'></i>
            </div>
        </div>
        <div class="panel panel-default col-sm-4" id="resultPannel4">
            <div id="firstCityPannel4" style="padding:125px">
                <i class='far fa-plus-square' id="firstCity4" style='font-size:56px'></i>
            </div>
        </div>
        <div class="panel panel-default col-sm-4" id="resultPannel5">
            <div id="firstCityPannel5" style="padding:125px">
                <i class='far fa-plus-square' id="firstCity5" style='font-size:56px'></i>
            </div>
        </div>
    </div>

    </body>
    <script>
        $(document).ready(function() {
            //city1
            $('#firstCity').on('click', function() {
                $('#resultPannel').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                $('#fiCity').on('blur', function() {
                    var fcity = $('#fiCity').val();
                    if (fcity !== "") {
                        $.ajax({
                            'url': "{{url('/fcity')}}",
                            'method': 'POST',
                            'data': {
                                '_token': '<?php echo csrf_token(); ?>',
                                'fcity': fcity
                            },
                            success: function(data) {
                                $('#resultPannel').html(data);
                                $('#edit1').on("click", function() {
                                    $('#resultPannel').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                                    $('#fiCity').on('blur', function() {
                                        var fcity = $('#fiCity').val();
                                        if (fcity !== "") {
                                            $.ajax({
                                                'url': "{{url('/fcity')}}",
                                                'method': 'POST',
                                                'data': {
                                                    '_token': '<?php echo csrf_token(); ?>',
                                                    'fcity': fcity
                                                },
                                                success: function(data) {
                                                    $('#resultPannel').html(data);
                                                    $('#edit1').on("click", function() {
                                                        $('#resultPannel').html('You reached Maximum number of editing option with out reload page!. If you want edit more reload page. ');

                                                    });
                                                }
                                            });
                                        } else {
                                            $('#resultPannel').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                            $('#fiCity').on('blur', function() {
                                                var fcity = $('#fiCity').val();
                                                if (fcity !== "") {
                                                    $.ajax({
                                                        'url': "{{url('/fcity')}}",
                                                        'method': 'POST',
                                                        'data': {
                                                            '_token': '<?php echo csrf_token(); ?>',
                                                            'fcity': fcity
                                                        },
                                                        success: function(data) {
                                                            $('#resultPannel').html(data);
                                                        }
                                                    });

                                                } else {
                                                    $('#resultPannel').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                                }

                                            });
                                        }

                                    });

                                });
                            }
                        });
                    } else {
                        $('#resultPannel').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                        $('#fiCity').on('blur', function() {
                            var fcity = $('#fiCity').val();
                            if (fcity !== "") {
                                $.ajax({
                                    'url': "{{url('/fcity')}}",
                                    'method': 'POST',
                                    'data': {
                                        '_token': '<?php echo csrf_token(); ?>',
                                        'fcity': fcity
                                    },
                                    success: function(data) {
                                        $('#resultPannel').html(data);
                                    }
                                });

                            } else {
                                $('#resultPannel').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                            }
                        });
                    }
                });
            });
            //second city   
            $('#firstCity2').on('click', function() {
                $('#resultPannel2').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                $('#fiCity').on('blur', function() {
                    var fcity = $('#fiCity').val();
                    if (fcity !== "") {
                        $.ajax({
                            'url': "{{url('/fcity')}}",
                            'method': 'POST',
                            'data': {
                                '_token': '<?php echo csrf_token(); ?>',
                                'fcity': fcity
                            },
                            success: function(data) {
                                $('#resultPannel2').html(data);
                                $('#edit1').on("click", function() {
                                    $('#resultPannel2').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                                    $('#fiCity').on('blur', function() {
                                        var fcity = $('#fiCity').val();
                                        if (fcity !== "") {
                                            $.ajax({
                                                'url': "{{url('/fcity')}}",
                                                'method': 'POST',
                                                'data': {
                                                    '_token': '<?php echo csrf_token(); ?>',
                                                    'fcity': fcity
                                                },
                                                success: function(data) {
                                                    $('#resultPannel2').html(data);
                                                    $('#edit1').on("click", function() {
                                                        $('#resultPannel2').html('You reached Maximum number of editing option with out reload page!. If you want edit more reload page. ');

                                                    });
                                                }
                                            });
                                        } else {
                                            $('#resultPannel2').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                            $('#fiCity').on('blur', function() {
                                                var fcity = $('#fiCity').val();
                                                if (fcity !== "") {
                                                    $.ajax({
                                                        'url': "{{url('/fcity')}}",
                                                        'method': 'POST',
                                                        'data': {
                                                            '_token': '<?php echo csrf_token(); ?>',
                                                            'fcity': fcity
                                                        },
                                                        success: function(data) {
                                                            $('#resultPannel2').html(data);
                                                        }
                                                    });

                                                } else {
                                                    $('#resultPannel2').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                                }

                                            });
                                        }

                                    });

                                });
                            }
                        });
                    } else {
                        $('#resultPannel2').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                        $('#fiCity').on('blur', function() {
                            var fcity = $('#fiCity').val();
                            if (fcity !== "") {
                                $.ajax({
                                    'url': "{{url('/fcity')}}",
                                    'method': 'POST',
                                    'data': {
                                        '_token': '<?php echo csrf_token(); ?>',
                                        'fcity': fcity
                                    },
                                    success: function(data) {
                                        $('#resultPannel2').html(data);
                                    }
                                });

                            } else {
                                $('#resultPannel2').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                            }
                        });
                    }
                });
            });
            //city3
            $('#firstCity3').on('click', function() {
                $('#resultPannel3').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                $('#fiCity').on('blur', function() {
                    var fcity = $('#fiCity').val();
                    if (fcity !== "") {
                        $.ajax({
                            'url': "{{url('/fcity')}}",
                            'method': 'POST',
                            'data': {
                                '_token': '<?php echo csrf_token(); ?>',
                                'fcity': fcity
                            },
                            success: function(data) {
                                $('#resultPannel3').html(data);
                                $('#edit1').on("click", function() {
                                    $('#resultPannel3').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                                    $('#fiCity').on('blur', function() {
                                        var fcity = $('#fiCity').val();
                                        if (fcity !== "") {
                                            $.ajax({
                                                'url': "{{url('/fcity')}}",
                                                'method': 'POST',
                                                'data': {
                                                    '_token': '<?php echo csrf_token(); ?>',
                                                    'fcity': fcity
                                                },
                                                success: function(data) {
                                                    $('#resultPannel3').html(data);
                                                    $('#edit1').on("click", function() {
                                                        $('#resultPannel3').html('You reached Maximum number of editing option with out reload page!. If you want edit more reload page. ');

                                                    });
                                                }
                                            });
                                        } else {
                                            $('#resultPannel3').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                            $('#fiCity').on('blur', function() {
                                                var fcity = $('#fiCity').val();
                                                if (fcity !== "") {
                                                    $.ajax({
                                                        'url': "{{url('/fcity')}}",
                                                        'method': 'POST',
                                                        'data': {
                                                            '_token': '<?php echo csrf_token(); ?>',
                                                            'fcity': fcity
                                                        },
                                                        success: function(data) {
                                                            $('#resultPannel3').html(data);
                                                        }
                                                    });

                                                } else {
                                                    $('#resultPannel3').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                                }

                                            });
                                        }

                                    });

                                });
                            }
                        });
                    } else {
                        $('#resultPannel3').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                        $('#fiCity').on('blur', function() {
                            var fcity = $('#fiCity').val();
                            if (fcity !== "") {
                                $.ajax({
                                    'url': "{{url('/fcity')}}",
                                    'method': 'POST',
                                    'data': {
                                        '_token': '<?php echo csrf_token(); ?>',
                                        'fcity': fcity
                                    },
                                    success: function(data) {
                                        $('#resultPannel3').html(data);
                                    }
                                });

                            } else {
                                $('#resultPannel3').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                            }
                        });
                    }
                });
            });
            //city4
            $('#firstCity4').on('click', function() {
                $('#resultPannel4').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                $('#fiCity').on('blur', function() {
                    var fcity = $('#fiCity').val();
                    if (fcity !== "") {
                        $.ajax({
                            'url': "{{url('/fcity')}}",
                            'method': 'POST',
                            'data': {
                                '_token': '<?php echo csrf_token(); ?>',
                                'fcity': fcity
                            },
                            success: function(data) {
                                $('#resultPannel4').html(data);
                                $('#edit1').on("click", function() {
                                    $('#resultPannel4').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                                    $('#fiCity').on('blur', function() {
                                        var fcity = $('#fiCity').val();
                                        if (fcity !== "") {
                                            $.ajax({
                                                'url': "{{url('/fcity')}}",
                                                'method': 'POST',
                                                'data': {
                                                    '_token': '<?php echo csrf_token(); ?>',
                                                    'fcity': fcity
                                                },
                                                success: function(data) {
                                                    $('#resultPannel4').html(data);
                                                    $('#edit1').on("click", function() {
                                                        $('#resultPannel4').html('You reached Maximum number of editing option with out reload page!. If you want edit more reload page. ');

                                                    });
                                                }
                                            });
                                        } else {
                                            $('#resultPannel4').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                            $('#fiCity').on('blur', function() {
                                                var fcity = $('#fiCity').val();
                                                if (fcity !== "") {
                                                    $.ajax({
                                                        'url': "{{url('/fcity')}}",
                                                        'method': 'POST',
                                                        'data': {
                                                            '_token': '<?php echo csrf_token(); ?>',
                                                            'fcity': fcity
                                                        },
                                                        success: function(data) {
                                                            $('#resultPannel4').html(data);
                                                        }
                                                    });

                                                } else {
                                                    $('#resultPannel4').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                                }

                                            });
                                        }

                                    });

                                });
                            }
                        });
                    } else {
                        $('#resultPannel4').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                        $('#fiCity').on('blur', function() {
                            var fcity = $('#fiCity').val();
                            if (fcity !== "") {
                                $.ajax({
                                    'url': "{{url('/fcity')}}",
                                    'method': 'POST',
                                    'data': {
                                        '_token': '<?php echo csrf_token(); ?>',
                                        'fcity': fcity
                                    },
                                    success: function(data) {
                                        $('#resultPannel4').html(data);
                                    }
                                });

                            } else {
                                $('#resultPannel4').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                            }
                        });
                    }
                });
            }); 
            //city5
            $('#firstCity5').on('click', function() {
                $('#resultPannel5').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                $('#fiCity').on('blur', function() {
                    var fcity = $('#fiCity').val();
                    if (fcity !== "") {
                        $.ajax({
                            'url': "{{url('/fcity')}}",
                            'method': 'POST',
                            'data': {
                                '_token': '<?php echo csrf_token(); ?>',
                                'fcity': fcity
                            },
                            success: function(data) {
                                $('#resultPannel5').html(data);
                                $('#edit1').on("click", function() {
                                    $('#resultPannel5').html(`<div class="container" style="padding:15px;">Enter a City name:            
            <input type="text" id="fiCity" name="fiCity" placeholder="enter city">
            </div>
            `);
                                    $('#fiCity').on('blur', function() {
                                        var fcity = $('#fiCity').val();
                                        if (fcity !== "") {
                                            $.ajax({
                                                'url': "{{url('/fcity')}}",
                                                'method': 'POST',
                                                'data': {
                                                    '_token': '<?php echo csrf_token(); ?>',
                                                    'fcity': fcity
                                                },
                                                success: function(data) {
                                                    $('#resultPannel5').html(data);
                                                    $('#edit1').on("click", function() {
                                                        $('#resultPannel5').html('You reached Maximum number of editing option with out reload page!. If you want edit more reload page. ');

                                                    });
                                                }
                                            });
                                        } else {
                                            $('#resultPannel5').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                            $('#fiCity').on('blur', function() {
                                                var fcity = $('#fiCity').val();
                                                if (fcity !== "") {
                                                    $.ajax({
                                                        'url': "{{url('/fcity')}}",
                                                        'method': 'POST',
                                                        'data': {
                                                            '_token': '<?php echo csrf_token(); ?>',
                                                            'fcity': fcity
                                                        },
                                                        success: function(data) {
                                                            $('#resultPannel5').html(data);
                                                        }
                                                    });

                                                } else {
                                                    $('#resultPannel5').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                                                }

                                            });
                                        }

                                    });

                                });
                            }
                        });
                    } else {
                        $('#resultPannel5').html(`Please Enter a city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                        $('#fiCity').on('blur', function() {
                            var fcity = $('#fiCity').val();
                            if (fcity !== "") {
                                $.ajax({
                                    'url': "{{url('/fcity')}}",
                                    'method': 'POST',
                                    'data': {
                                        '_token': '<?php echo csrf_token(); ?>',
                                        'fcity': fcity
                                    },
                                    success: function(data) {
                                        $('#resultPannel5').html(data);
                                    }
                                });

                            } else {
                                $('#resultPannel5').html(`Enter city name:
                    <input type="text" id="fiCity" name="fiCity" placeholder="enter city">`);
                            }
                        });
                    }
                });
            });       
        });
    </script>

    </html>
    @endsection