
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
        .styled-table {
            border-collapse: collapse;
            margin: auto;
            padding: 10px;
            font-size: 0.9em;
            width: 85%;
            height: 20%;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }
        .styled-table thead tr {
            background-color: #ffa500;
            color: #ffffff;
            text-align: center;
        }
        .styled-table th{
            padding: 12px 15px;
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
        .styled-table td {
            text-align: center;
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            background-color: #f3f3f3;
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #ffa500;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
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
        color: white;
        font-size: 25px;
        text-align: center;
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
    </style>

        <ul>
            <li><a href="/user">Usuarios</a></li>
            <li><a class="active" href="/entries">Entradas</a></li>
            <li><a href="/categories">Categorías</a></li>
        </ul>

        <div class="card-body">
            <div class="card card-success">
            <div class="card-header">
                <h3 class="card-title">ENTRADAS</h3>
            </div>
            <?php if ($entries): ?>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Categoria</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($entries as $entry)
                        <tr>
                        <td>{{$entry['category_id']}}</td>
                            <td><span class="badge badge-primary">{{$entry['title']}}</span></td>
                            <td>{{$entry['content']}}</td>
                            <td>{{$entry['status']}}</td>
                            <td>
                                <a href="entries/{{$entry['id']}}/inspect" class="myButton"><i class="fa fa-save"></i> Ver entrada</a>
                                <a href="entries/{{$entry['id']}}/edit" class="myButton"><i class="fa fa-save"></i> Modificar </a>
                                <a wire:click="borrar({{$entry['id']}})" class="myButton"><i class="fa fa-save"></i> Eliminar </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <?php else: ?>
                <p id="crear" >No hay entradas registradas.</p>
            <?php endif; ?>
        </div>
        <div style="padding:20px;"id="crear">
            <a href="/entries/create"class="myButton"><i class="fa fa-save"></i> Crear nueva entrada</a>
        </div>
    
    </div>

</div>


