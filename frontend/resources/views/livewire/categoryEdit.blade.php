
<div>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <style>
        body {
            margin: 0;
            font-family: "Montserrat", sans-serif;
            background-color: #fff4a4;
        }
        .myButton {
            box-shadow: 0px 1px 0px 0px #fff6af;
            background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
            background-color:#ffec64;
            border-radius:6px;
            border:1px solid #ffaa22;
            display:inline-block;
            cursor:pointer;
            color: white;
            font-family:Arial;
            font-size:15px;
            font-weight:bold;
            padding:6px 24px;
            text-decoration:none;
            text-shadow: rgb(0, 0, 0) 2px 0px 0px, 
            rgb(0, 0, 0) 1.75517px 0.958851px 0px, 
            rgb(0, 0, 0) 1.0806px 1.68294px 0px, 
            rgb(0, 0, 0) 0.141474px 1.99499px 0px, 
            rgb(0, 0, 0) -0.832294px 1.81859px 0px, 
            rgb(0, 0, 0) -1.60229px 1.19694px 0px, 
            rgb(0, 0, 0) -1.97998px 0.28224px 0px, 
            rgb(0, 0, 0) -1.87291px -0.701566px 0px, 
            rgb(0, 0, 0) -1.30729px -1.5136px 0px,
            rgb(0, 0, 0) -0.421592px -1.95506px 0px, 
            rgb(0, 0, 0) 0.567324px -1.91785px 0px, 
            rgb(0, 0, 0) 1.41734px -1.41108px 0px, 
            rgb(0, 0, 0) 1.92034px -0.558831px 0px;
        }
        .myButton:hover {
            background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
            background-color:#ffab23;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }
        ul {
        list-style-type: none;
        margin: 0;
        left: 0;
        padding: 0;
        overflow: hidden;
        background-color: orange;
        }
        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        text-shadow: rgb(0, 0, 0) 2px 0px 0px, 
        rgb(0, 0, 0) 1.75517px 0.958851px 0px, 
        rgb(0, 0, 0) 1.0806px 1.68294px 0px, 
        rgb(0, 0, 0) 0.141474px 1.99499px 0px, 
        rgb(0, 0, 0) -0.832294px 1.81859px 0px, 
        rgb(0, 0, 0) -1.60229px 1.19694px 0px, 
        rgb(0, 0, 0) -1.97998px 0.28224px 0px, 
        rgb(0, 0, 0) -1.87291px -0.701566px 0px, 
        rgb(0, 0, 0) -1.30729px -1.5136px 0px,
        rgb(0, 0, 0) -0.421592px -1.95506px 0px, 
        rgb(0, 0, 0) 0.567324px -1.91785px 0px, 
        rgb(0, 0, 0) 1.41734px -1.41108px 0px, 
        rgb(0, 0, 0) 1.92034px -0.558831px 0px;
        }

        li a:hover {
            background-color: #111;
        }
        .active {
            background-color: #111;
        }
        .card-body {
            text-align: center;
            font-weight: bold;
            color: white;
            font-size: 20px;
            text-shadow: rgb(0, 0, 0) 2px 0px 0px, 
            rgb(0, 0, 0) 1.75517px 0.958851px 0px, 
            rgb(0, 0, 0) 1.0806px 1.68294px 0px, 
            rgb(0, 0, 0) 0.141474px 1.99499px 0px, 
            rgb(0, 0, 0) -0.832294px 1.81859px 0px, 
            rgb(0, 0, 0) -1.60229px 1.19694px 0px, 
            rgb(0, 0, 0) -1.97998px 0.28224px 0px, 
            rgb(0, 0, 0) -1.87291px -0.701566px 0px, 
            rgb(0, 0, 0) -1.30729px -1.5136px 0px,
            rgb(0, 0, 0) -0.421592px -1.95506px 0px, 
            rgb(0, 0, 0) 0.567324px -1.91785px 0px, 
            rgb(0, 0, 0) 1.41734px -1.41108px 0px, 
            rgb(0, 0, 0) 1.92034px -0.558831px 0px;
            margin: auto;
            width: 60%;
            padding: 10px;
            padding-bottom: 50px;
        }
        .card-title {
            color: white;
            text-align:center;
            text-shadow: rgb(0, 0, 0) 2px 0px 0px, 
            rgb(0, 0, 0) 1.75517px 0.958851px 0px, 
            rgb(0, 0, 0) 1.0806px 1.68294px 0px, 
            rgb(0, 0, 0) 0.141474px 1.99499px 0px, 
            rgb(0, 0, 0) -0.832294px 1.81859px 0px, 
            rgb(0, 0, 0) -1.60229px 1.19694px 0px, 
            rgb(0, 0, 0) -1.97998px 0.28224px 0px, 
            rgb(0, 0, 0) -1.87291px -0.701566px 0px, 
            rgb(0, 0, 0) -1.30729px -1.5136px 0px,
            rgb(0, 0, 0) -0.421592px -1.95506px 0px, 
            rgb(0, 0, 0) 0.567324px -1.91785px 0px, 
            rgb(0, 0, 0) 1.41734px -1.41108px 0px, 
            rgb(0, 0, 0) 1.92034px -0.558831px 0px;
        }
        #crear {
            margin: auto;
            width: 60%;
            text-align: center;
        }
        .form-control {
            padding:3px; font-size:16px; 
            margin-bottom: 5px;
            margin-top: 5px;
            border-color:#cccccc; 
            border-width:2px; 
            border-radius:8px; 
            border-style:dashed; 
        }

        .form-control:focus { 
            outline:none; 
        } 
    </style>

        <ul>
            <li><a href="/user">Regresar</a></li>
        </ul>

    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">MODIFICAR CATEGORÍA</h3>
        </div>

        <form wire:submit.prevent='editarCategoria' name="Form" onSubmit="return validateForm()" >
            <div class="card-body">
                <form wire:submit.prevent='guardar' name="FormInner">

                <div class="card-body">
                        <div class="form-group">
                            <label>Nombre</label>
                        </div>
                        <input wire:model='data.name' name="answer_a" type="text" class="form-control" placeholder="Nombre">
                        
                        <div class="form-group">
                            <label>Descripción</label>
                        </div>
                        <input wire:model='data.description' name="answer_b" type="text" class="form-control" placeholder="Descripción">
                    </div>

                    <div id="crear" class="card-footer">
                        <button type="submit"class="myButton">Modificar categoría</button>
                    </div>
        </form>
    </div>

    <script type="text/javascript">
        function validateForm() {
            var a = document.forms["Form"]["answer_a"].value;
            var b = document.forms["Form"]["answer_b"].value;

            if (
                a == ""
                || b == ""
            ) {
            alert("Faltan campos por llenar");
            return false;
            }else{
                alert("Categoría Modificada con éxito!")

                return true;
            }
        }
    </script>


</div>
