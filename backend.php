<?php
function obtenerDatosAPI($url) {
    $response = file_get_contents($url);
    return json_decode($response, true);
}

if (isset($_GET['pais'])) {
    // Buscar equipos por país
    $pais = urlencode($_GET['pais']); 
    $url = "https://www.thesportsdb.com/api/v1/json/3/search_all_teams.php?s=Soccer&c=$pais";
    $data = obtenerDatosAPI($url);

    echo "<h2>Equipos en $pais</h2>";
    if (!empty($data['teams'])) {
        foreach ($data['teams'] as $equipo) {
            echo "<p>" . $equipo['strTeam'] . " - Estadio: " . $equipo['strStadium'] . "</p>";
        }
    } else {
        echo "<p>No se encontraron equipos para ese país.</p>";
    }
} elseif (isset($_GET['equipo'])) {
    // Buscar datos del equipo por nombre
    $equipo = urlencode($_GET['equipo']);
    $url = "https://www.thesportsdb.com/api/v1/json/3/searchteams.php?t=$equipo";
    $data = obtenerDatosAPI($url);

    echo "<h2>Datos del equipo: $equipo</h2>";
    if (!empty($data['teams'])) {
        foreach ($data['teams'] as $team) {
            echo "<p>Nombre: " . $team['strTeam'] . "</p>";
            echo "<p>Estadio: " . $team['strStadium'] . "</p>";
            echo "<p>Ubicación: " . $team['strStadiumLocation'] . "</p>";
        }
    } else {
        echo "<p>No se encontraron datos para ese equipo.</p>";
    }
} elseif (isset($_GET['jugador'])) {
    // Buscar jugador por nombre
    $jugador = urlencode($_GET['jugador']);
    $url = "https://www.thesportsdb.com/api/v1/json/3/searchplayers.php?p=$jugador";
    $data = obtenerDatosAPI($url);

    echo "<h2>Datos del jugador: $jugador</h2>";
    if (!empty($data['player'])) {
        foreach ($data['player'] as $jug) {
            echo "<p>Nombre: " . $jug['strPlayer'] . "</p>";
            echo "<p>Equipo: " . $jug['strTeam'] . "</p>";
            echo "<p>Nacionalidad: " . $jug['strNationality'] . "</p>";
        }
    } else {
        echo "<p>No se encontraron datos para ese jugador.</p>";
    }
} else {
    echo "<p>No se recibió ninguna búsqueda válida.</p>";
}
?>
