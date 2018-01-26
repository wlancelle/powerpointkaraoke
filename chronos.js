function chrono(temps)
{
    temps = temps - 1;	
    document.getElementById('nb_sec').innerHTML = temps+1;

    if ( temps > 0)
    {
        setTimeout("chrono("+temps+", '"+'nb_sec'+"')", 1000);
    }
}
