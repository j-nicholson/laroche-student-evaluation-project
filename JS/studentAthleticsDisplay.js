function displayStudentAthletics(id) {
  if (id === "yes") {
    document.getElementById('StudentAthleticsDisplay').innerHTML = 'If yes, your sport name: <input id="AthleticsDisplay" name="AthleticsDisplay" type="text" required>';
  }
  else {
    document.getElementById('StudentAthleticsDisplay').innerHTML = '';
  }
}
