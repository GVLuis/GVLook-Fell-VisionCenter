<div id="modal-add-client" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <div class="panel panel-alpha mb0">
                    <div class="panel-heading">
                        <h5 class="panel-title">Agregar nuevo cliente</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body pb0">
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group mb0">
                                        <label class="select-field">Documento</label>
                                        <div class="selectWrapper">
                                            <select name="select" class="form-control selectBox">
                                                <option selected disabled>Tipo de documento</option>
                                                <option value="opt2">Option 2</option>
                                                <option value="opt3">Option 3</option>
                                                <option value="opt4">Option 4</option>
                                                <option value="opt5">Option 5</option>
                                                <option value="opt6">Option 6</option>
                                                <option value="opt7">Option 7</option>
                                                <option value="opt8">Option 8</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Nº de documento</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label>Fecha de nacimiento</label>
                                        <input type="text" class="form-control" name="format-date" placeholder="DD/MM/AAAA">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Nombre</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Apellido paterno</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Apellido materno</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Sexo</label>
                                    <div class="form-group">
                                        <div class="radio-group">
                                            <div class="el-radio">
                                                <input type="radio" name="gender" id="dd" value="option">
                                                <label class="el-radio-style" for="dd"></label>
                                            </div>
                                            <label class="label-checkbox">Masculino</label>
                                            <div class="el-radio">
                                                <input type="radio" name="gender" id="ee" value="option">
                                                <label class="el-radio-style" for="ee"></label>
                                            </div>
                                            <label class="label-checkbox">Femenino</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group mt15">
                                        <label class="el-switch mt5 pull-left">
                                            <input type="checkbox" name="switch">
                                            <span class="el-switch-style"></span>
                                        </label>
                                        <label class="label-checkbox mb20">Datos de tutor</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Nombre de tutor</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>									
                    </div>
                </div>
                <div class="panel panel-alpha mb0">
                    <div class="panel-heading">
                        <h5 class="panel-title">Contacto</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body pb0">
                        <div id="contact_rows">
                        <div class="row displayTitles">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group mb0">
                                        <label class="select-field">Campo</label>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Dato</label>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="row text-center">
                                        <div class="col-md-4">
                                            <div class="radio-group text-center">
                                                <label>Preferente</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="radio-group text-center">
                                                <label>No disponible</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="radio-group text-center">
                                                <label>Eliminar</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group mb0">
                                        <label class="select-field displayTitlesInverse">Campo</label>
                                        <div class="selectWrapper">
                                            <select name="select" class="form-control selectBox" disabled>
                                                <option value="opt2" selected>Celular</option>
                                                <option value="opt3">Correo</option>
                                                <option value="opt4">Teléfono</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label class="displayTitlesInverse">Dato</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="row text-center mb10-xs">
                                        <div class="col-xs-4 text-center">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox displayTitlesInverse">Preferente</label>
                                                    <div class="el-radio mt5">
                                                    <input type="radio" name="prefer" id="a" value="option" checked>
                                                    <label class="el-radio-style" for="a"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <div class="radio-group text-center mt5">
                                                <label class="label-checkbox displayTitlesInverse">No disponible</label>
                                                <div class="el-checkbox">
                                                    <input type="checkbox" name="check" id="1">
                                                    <label class="el-checkbox-style" for="1"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox btn-delete-row displayTitlesInverse">Eliminar</label>
                                                <a type="button" class="btn btn-delete-row btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="division mb15"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group mb0">
                                        <label class="select-field displayTitlesInverse">Campo</label>
                                        <div class="selectWrapper">
                                            <select name="select" class="form-control selectBox">
                                                <option value="opt2">Celular</option>
                                                <option value="opt3" selected>Correo</option>
                                                <option value="opt4">Teléfono</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label class="displayTitlesInverse">Dato</label>
                                    <div class="form-group input-group">
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon addon-middle">@</span>
                                        <input type="text" class="form-control" id="popular_mails_A" placeholder="Escribe 'i'">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="row text-center mb10-xs">
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox displayTitlesInverse">Preferente</label>
                                                <div class="el-radio mt5">
                                                    <input type="radio" name="prefer" id="b" value="option">
                                                    <label class="el-radio-style" for="b"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center mt5">
                                                <label class="label-checkbox displayTitlesInverse">No disponible</label>
                                                <div class="el-checkbox">
                                                    <input type="checkbox" name="check" id="2">
                                                    <label class="el-checkbox-style" for="2"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox btn-delete-row displayTitlesInverse">Eliminar</label>
                                                <a type="button" class="btn btn-delete-row btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="division mb15"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group mb0">
                                        <label class="select-field displayTitlesInverse">Campo</label>
                                        <div class="selectWrapper">
                                            <select name="select" class="form-control selectBox">
                                                <option value="opt2">Celular</option>
                                                <option value="opt3">Correo</option>
                                                <option value="opt4" selected>Teléfono</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label class="displayTitlesInverse">Dato</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="row text-center mb10-xs">
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox displayTitlesInverse">Preferente</label>
                                                <div class="el-radio mt5">
                                                    <input type="radio" name="prefer" id="c" value="option">
                                                    <label class="el-radio-style" for="c"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center mt5">
                                                <label class="label-checkbox displayTitlesInverse">No disponible</label>
                                                <div class="el-checkbox">
                                                    <input type="checkbox" name="check" id="3">
                                                    <label class="el-checkbox-style" for="3"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox btn-delete-row displayTitlesInverse">Eliminar</label>
                                                <a type="button" class="btn btn-delete-row btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="division mb15"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group mb0">
                                        <label class="select-field displayTitlesInverse">Campo</label>
                                        <div class="selectWrapper">
                                            <select name="select" class="form-control selectBox">
                                                <option value="opt2">Celular</option>
                                                <option value="opt3">Correo</option>
                                                <option value="opt4" selected>Teléfono</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label class="displayTitlesInverse">Dato</label>
                                    <div class="form-group has-success has-feedback">
                                        <input type="text" class="form-control">
                                        <div class="form-control-feedback">
                                            <i class="icon-checkmark-circle"></i>
                                        </div>
                                        <span class="help-block">El campo se validó correctamente</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="row text-center mb10-xs">
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox displayTitlesInverse">Preferente</label>
                                                <div class="el-radio mt5">
                                                    <input type="radio" name="prefer" id="d" value="option">
                                                    <label class="el-radio-style" for="d"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center mt5">
                                                <label class="label-checkbox displayTitlesInverse">No disponible</label>
                                                <div class="el-checkbox">
                                                    <input type="checkbox" name="check" id="4">
                                                    <label class="el-checkbox-style" for="4"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox btn-delete-row displayTitlesInverse">Eliminar</label>
                                                <a type="button" class="btn btn-delete-row btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="division mb15"></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group mb0">
                                        <label class="select-field displayTitlesInverse">Campo</label>
                                        <div class="selectWrapper">
                                            <select name="select" class="form-control selectBox">
                                                <option value="opt2">Celular</option>
                                                <option value="opt3">Correo</option>
                                                <option value="opt4" selected>Teléfono</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label class="displayTitlesInverse">Dato</label>
                                    <div class="form-group has-error has-feedback">
                                        <input type="text" class="form-control">
                                        <div class="form-control-feedback">
                                            <i class="icon-cancel-circle2"></i>
                                        </div>
                                        <span class="help-block">Existe un error en el campo</span>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="row text-center mb10-xs">
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox displayTitlesInverse">Preferente</label>
                                                <div class="el-radio mt5">
                                                    <input type="radio" name="prefer" id="e" value="option">
                                                    <label class="el-radio-style" for="e"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center mt5">
                                                <label class="label-checkbox displayTitlesInverse">No disponible</label>
                                                <div class="el-checkbox">
                                                    <input type="checkbox" name="check" id="5">
                                                    <label class="el-checkbox-style" for="5"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="radio-group text-center">
                                                <label class="label-checkbox btn-delete-row displayTitlesInverse">Eliminar</label>
                                                <a type="button" class="btn btn-delete-row btn-icon btn-rounded btn-alpha btn-circle-xs"><i class="icon-cross2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="division mb15"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button id="btn-add-contact" type="button" class="btn btn-alpha btn-std btn-rounded pull-right">Agregar contacto</button>
                        </div>
                    </div>
                </div>
                <div class="panel panel-alpha mb0">
                    <div class="panel-heading">
                        <h5 class="panel-title">Dirección
                        </h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body pb0">
                        <form action="#">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <label>Distrito</label>
                                    <div class="form-group has-feedback has-feedback-left">
                                        <input type="text" class="form-control" placeholder="Escribe 'di'" id="distrito_A">
                                        <div class="form-control-feedback">
                                            <i class="icon-search4 text-size-base"></i>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-6 col-md-4">
                                    <label>Departamento</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Provincia</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <label>Dirección</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </form>									
                    </div>
                </div>
                <div class="panel panel-alpha mb0">
                    <div class="panel-heading">
                        <h5 class="panel-title">Observaciones</h5>
                        <div class="heading-elements">
                            <ul class="icons-list">
                                <li><a data-action="collapse"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="panel-body pb0">
                        <form action="#">
                            <div class="form-group">
                                <textarea rows="6" cols="5" class="form-control"></textarea>
                            </div>
                        </form>								
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-sm-12">
                    <div class="form-group mt0">
                        <div class="radio-group text-center">
                            <div class="el-checkbox">
                                <input type="checkbox" name="check_agree_1" id="check_agree_1">
                                <label class="el-checkbox-style" for="check_agree_1"></label>
                            </div>
                        </div>
                        <label class="label-checkbox mb20">Autorizo la utilización de mis datos.</label>
                    </div>
                </div>
                <button type="button" class="btn btn-alpha-border btn-std btn-rounded" data-dismiss="modal">Cancelar</button>
                <button id="ok-copy" type="button" class="btn btn-alpha btn-std btn-rounded">Agregar</button>
            </div>
        </div>
    </div>
</div>

