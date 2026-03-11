const tileContainer = document.getElementById("tile-container");
const moduleTuileMosaique = document.getElementById("module_tuiles_mosaique");
console.log(tileContainer);

if(tileContainer ) {


  const tile_numb = tileContainer.getAttribute("data-tiles-number");
  console.log(tile_numb);

  const tuile_items = document.querySelectorAll('.tuile_item');
  console.log(tuile_items);

  var currentTile = 0;
  var row = 0;

  // parameters you can play with
  const numberOfTiles = tile_numb;
  const totalColumns = 3;

  const tileWidth = 175;
  // horizontal distance between tiles
  const xDistance = 280;
  // vertical distance between tiles
  const yDistance = 80;

  tuile_items.forEach( el => {
    for (var column = 0; column < totalColumns; column++) {
      const tile = document.createElement("div");
      tile.className = "tuile_mosaique";
      tile.style.left = `${column * xDistance + (row % 2 ? 140 : 0)}px`;
      tile.style.top = `${row * yDistance}px`;
      tile.style.backgroundImage = `url(${el.getAttribute('data-img')})`;
      const id = el.getAttribute('data-id');
      tile.id = id
      tile.addEventListener('click', () => {
        el.classList.toggle('hidden')
      })
      tileContainer.appendChild(tile);
    }
    row++;
  })


  tileContainer.style.width = `${xDistance * totalColumns}px`;
  moduleTuileMosaique.style.height = `${yDistance * (row + 1)}px`;

  console.log("after tileContainer", tileContainer);


  const close_this_tiles = document.querySelectorAll('.close_my_parent')
  close_this_tiles.forEach( el => {
    el.addEventListener('click', () => {
      console.log(el.parentElement)
      el.parentElement.classList.add('hidden')
    })
  })

}


/* TRIGGER */
const form = document.querySelector('#tile-form');

const trigger = document.querySelector('#form-trigger');
trigger.addEventListener('click', event => {
    event.preventDefault();

    console.log('triger !')
    form.classList.toggle('hidden');

})
