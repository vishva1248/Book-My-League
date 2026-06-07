const placeList = document.getElementById('place-list');

const places = [
  { name: 'Place 1', location: 'Location 1' },
  { name: 'Place 2', location: 'Location 2' },
  { name: 'Place 3', location: 'Location 3' },
  // add more places here
];

function loadPlaces() {
  places.forEach(place => {
    const li = document.createElement('li');
    li.textContent = `${place.name} - ${place.location}`;
    placeList.appendChild(li);
  });
}

document.getElementById('load-places').addEventListener('click', loadPlaces);