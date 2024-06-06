<!DOCTYPE html>
<html>
<head>
    <title>Liste des élèves</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            padding: 5%;
        }
    </style>
</head>
<body>
    <h1>Liste des élèves</h1>

    {{-- Vue en liste --}}
    <ul>
        {{-- Boucle qui affiche tous les étudiants et leurs infos --}}
        @foreach ($students as $student)
            <li>{{ $student->first_name }} {{ $student->last_name }}  |  {{ $student->date_of_birth }} | {{ $student->address }} | {{ $student->group->name }}</li>
        @endforeach
    </ul>

    {{-- Vue en tableau --}}
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
            {{-- Boucle pour afficher les étudiants et leurs infos --}}
            @foreach ($students as $student)
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

    {{-- Lien formulaire de création nouvel élève --}}
    <a href="{{ route('students.create') }}"> 
        <button>Ajouter un élève</button>
    </a>

    <h2>Classes</h2>

    {{-- Bouton vers page d'un groupe classe --}}
    @foreach($groups as $group)
        <a href="{{ route('groups.show', $group->id) }}">
            <button>{{ $group->name }}</button>
        </a>
    @endforeach
</body>
</html>
