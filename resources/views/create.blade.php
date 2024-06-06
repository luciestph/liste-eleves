<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un élève</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'> 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat';
            background-color: #0A2342;
            margin:0;
        }
        .main-title {
            background-color: #F46197;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #FFFFFF;
            font-size: 42px;
            padding: 10px 0 10px 0;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        .contenu {
            padding: 2em 5% 2em 5%;
            margin:auto;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        }
        h2, h3 {
            color: #F46197;
            font-size: 38px;
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        ul, li, th, td, label {
            color: #FFFDF7;
        }
        .boutons-classes {
            flex-direction: row;
            margin-bottom: 1em;
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
        a {
            color: #84BC9C;
            text-decoration: none;
            font-size: 16px;
        }
        a:hover {
            color: #2CA58D;
        }
    </style>
</head>
<body>
    <div class="main-title">
        <h1>COLLÈGE CAWEB</h1>
    </div>
    <div class="contenu">
        <a href="{{ url('/students') }}">
            &#x2190; Retourner à la liste
        </a>
        <h2>Ajouter un élève</h2>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div>
                <label for="first_name">Prénom :</label>
                <input type="text" name="first_name" id="first_name" required>
            </div>
            <div>
                <label for="last_name">Nom :</label>
                <input type="text" name="last_name" id="last_name" required>
            </div>
            <div>
                <label for="date_of_birth">Date de naissance :</label>
                <input type="date" name="date_of_birth" id="date_of_birth" required>
            </div>
            <div>
                <label for="address">Adresse :</label>
                <input type="text" name="address" id="address" required>
            </div>
            <div>
                <label for="group_id">Classe :</label>
                <select name="group_id" id="group_id" required>
                    @foreach($groups as $group)
                        <option value="{{ $group->id }}">{{ $group->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit">Ajouter l'élève</button>
        </form>
        <a href="{{ url('/students') }}">
            &#x2190; Retourner à la liste
        </a>
    </div>
</body>
</html>
