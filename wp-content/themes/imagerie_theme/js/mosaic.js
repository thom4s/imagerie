
const tileContainer = document.getElementById("tile-container");
const moduleTuileMosaique = document.getElementById("module_tuiles_mosaique");
console.log(tileContainer);

if(tileContainer ) {


  // const tile_numb = tileContainer.getAttribute("data-tiles-number");
  // console.log(tile_numb);

  const tuile_items = document.querySelectorAll('.tuile_item');
  console.log(tuile_items);


  // parameters you can play with
  // const numberOfTiles = tile_numb;
  const totalColumns = 6;

  // horizontal distance between tiles
  const xDistance = 160;
  // vertical distance between tiles
  const yDistance = 140;

  const count = tuile_items.length

  let row = 0;
  let column = 0;
  let rowTags = [];

rowTags[row] = document.createElement("div");
rowTags[row].classList.add('row');

  for (let index = 0; index < tuile_items.length; index++) { 

      let random = Math.floor(Math.random() * column);
      const tile = document.createElement("div");

      if( random === column) {

        tile.className = "tuile_mosaique";
        tile.style.left = `${column * xDistance + (row % 2 ? 80 : 0)}px`;
        tile.style.top = `${row * yDistance}px`;
        tile.style.backgroundImage = `url(${tuile_items[index].getAttribute('data-img')})`;
        const id = tuile_items[index].getAttribute('data-id');
        tile.id = id;
        tile.addEventListener('click', () => {
          tuile_items[index].classList.toggle('hidden')
        })

      }
      else {
        tile.className = "tuile_mosaique";
        tile.style.left = `${column * xDistance + (row % 2 ? 80 : 0)}px`;
        tile.style.top = `${row * yDistance}px`;
        tile.style.backgroundImage = `url(${tuile_items[index].getAttribute('data-img')})`;
        const id = tuile_items[index].getAttribute('data-id');
        tile.id = id;
        tile.addEventListener('click', () => {
          tuile_items[index].classList.toggle('hidden')
        })
      }


      column++;
      rowTags[row].appendChild(tile);
        console.log(index, index % totalColumns)

      if( index !== 0 && index % totalColumns === 0 ) {
        tileContainer.appendChild( rowTags[row] );
        row++;
        rowTags[row] = document.createElement("div");
        rowTags[row].classList.add('row');
        column = 0;
      } 


    }
  tileContainer.appendChild( rowTags[row] );

  //tileContainer.style.width = `${xDistance * totalColumns}px`;
  moduleTuileMosaique.style.height = `${yDistance * (row + 1)}px`;
  console.log("after tileContainer", tileContainer);

}


/* FORM TRIGGER */
const form = document.querySelector('#tile-form');

const trigger = document.querySelectorAll('.form-trigger');
trigger.forEach( el => {
    el.addEventListener('click', event => {
      event.preventDefault();

      let parents = document.querySelectorAll('.parent')
      console.log(parents);
      parents.forEach(el => el.classList.add('hidden') );

      form.classList.toggle('hidden');
  })
})



/* LIKE  */

const likes = document.querySelectorAll( ".like");

likes.forEach( el => {
  el.addEventListener("click", () => {
    if (el.classList.contains("je_fond_transparent")) {
      el.classList.remove("je_fond_transparent");
      el.classList.add("je_fond_rouge");
    } else {
      el.classList.remove("je_fond_rouge");
      el.classList.add("je_fond_transparent");
    }
  });

})

