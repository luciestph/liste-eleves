<!DOCTYPE html>
<html>
<head>
    <title>Classe : {{ $group->name }}</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat';
            background-color: #0A2342;
        }
        .main-title {
            background-color: #F46197;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #FFFFFF;
            font-size: 46px;
            padding: 20px 0 20px 0;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .contenu {
            padding: 2em 5% 2em 5%;
        }
        h2, h3 {
            color: #F46197;
            font-size: 38px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        ul, li, th, td, p {
            color: #FFFDF7;
        }
        button {
            margin: 10px 10px 10px 0;
            background-color: #84BC9C;
            color: #FFFFFF;
            font-weight: 600;
            border: 2px solid #ffffff;
            border-radius: 50px;
            padding: 10px 20px 10px 20px;
        }
        button:hover {
            background-color: #2CA58D;
        }
        .student-list {
            border: 2px solid #FFFDF7;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 10px;
            width: fit-content;
        }
        th, td {
            padding-right: 15px;
        }
        .contenu a {
            color: #84BC9C;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="main-title">
        <h1>COLLÈGE CAWEB</h1>
    </div>
    <section class="contenu">
        <a href="{{ url('/students') }}">
            &#x2190; Retourner à la liste
        </a>
        <h2>Classe : {{ $group->name }}</h2>
        <ul>
            
            {{-- Vue en liste --}}
            @foreach ($group->students as $student)
                <li>{{ $student->first_name }} {{ $student->last_name }}  |  {{ $student->date_of_birth }} | {{ $student->address }} | {{ $student->group->name }}</li>
            @endforeach

        <div class="student-list">
            <table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Date de naissance</th>
                    <th>Adresse</th>
                    <th>Classe</th>
                </tr>
            </thead>
            <tbody>
                {{-- Boucle qui affiche tous les étudiants et leurs infos --}}
                @foreach ($group->students as $student)
                    <tr>
                        <td>{{ $student->first_name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->date_of_birth }}</td>
                        <td>{{ $student->address }}</td>
                        <td>{{ $student->group->name }}</td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </ul>
    </section>
</body>
</html>
