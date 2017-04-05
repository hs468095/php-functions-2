<?php 

function titlecase($word) {
  $word = ucwords($word);
  return $word;
}

function capfirst($word) {
  $word = ucfirst($word);
  return $word;
}

function transformers($type) {
  if ($type == 'transformers') {
    $valid = true;
    $description = 'The Transformers is a half-hour American animated television series which originally aired from September 17, 1984 to November 11, 1987. The first of many series in the Transformers franchise, it was based upon Hasbro&rsquo;s Transformers toy line (itself based upon the Diaclone and Microman toy lines originally created by Japanese toy manufacturer Takara) and depicts a war among giant robots that can transform into vehicles and other objects.';
  } else if ($type == 'autobots') {
    $valid = true;
    $description = 'Autobots are a fictional team of sentient robots from the planet Cybertron led by Optimus Prime, and the main protagonists in the fictional universe of the Transformers, a collection of various toys, cartoons, movies, graphic novels, and paperback books first introduced in 1984. The "Heroic Autobots" are opposed by the Evil Decepticons. Both Autobots and Decepticons are humanoid robots that can transform into machines, vehicles and other familiar mechanical objects. Autobots typically transform into regular cars, trucks, or other road vehicles (automobiles) but some few are aircraft, military vehicles, communication devices, weapons, and even robotic animals. These Autobots are often grouped into special "teams" that have the suffix "-bot" at the end, such as in Dinobot (Decepticon groups names end in "-con").';
  } else if ($type == 'decepticons') {
    $valid = true;
    $description = 'The Decepticons are the main antagonists in the fictional universes of the Transformers franchise and related comics and cartoons, and the enemies of the Autobots. The villains take many forms, and have many different origins and stories across the numerous different Transformers media, but in almost all incarnations, they are led by Megatron. They are typically represented by the purple facial insignia they all wear. Primarily, Decepticons have red eyes, while Autobots have blue eyes. They are usually known for their air power, especially since many of them turn into aircraft. They often turn into military vehicles, construction vehicles, expensive luxury or sports cars, and even smaller-than-human-sized objects.';
  } else if ($type == 'optimus prime') {
    $valid = true;
    $description = 'Optimus Prime is the awe-inspiring leader of the Autobot forces. Selfless and endlessly courageous, he is the complete opposite of his mortal enemy Megatron. Originally a mere civilian, he was chosen by the Matrix to command, the first in a number of heavy burdens he has been forced to bear. Another is his bringing of the Transformer&rsquo;s  conflict to Earth. Every casualty, human or Cybertronian, weighs heavily on his spark. He does not show this side to his soldiers, and he never succumbs to despair. The Autobots need a decisive, charismatic leader, and that is what he gives them. It was that leadership which turned the tide of the Great War.';
  }else if ($type == 'megatron') {
    $valid = true;
    $description = 'Megatron is the founder of the Decepticon uprising, and their most well-known and feared leader. As a young, charismatic leader forged in battle and the heritage of war, he began to believe in a grand purpose for his race—it is the Transformers&rsquo;s glorious destiny to rule an empire which will span the universe. The opposite of his mortal enemy Optimus Prime, he feels great contempt for other Transformers who, he feels, betray their proud heritage by demanding peace and cooperation with weaker life forms. It is the destiny of the Decepticons to bring order to the universe through conquest, though in the millions of years since coining this purpose it remains to be seen how much of his mission statement is altruistic... and how much of it is mere words built to fuel warriors to further his desire for personal power.';
  }else if ($type == 'bumblebee') {
    $valid = true;
    $description = 'Bumblebee is one of the smallest and physically weakest Autobots. While his stature allows him to do his job better than most Autobots could manage, he is self-conscious about his size. Maybe this is why he makes fast friends among the humans. He looks up (so to speak) to the other Autobots, especially Optimus Prime, but what he doesn&rsquo;s t realize is that they look up to him. He may be small, but he&rsquo;s  brave, and he&rsquo;s one of the most well-liked Autobots around. Bumblebee already has the respect he craves.';
  }else if ($type == 'starscream') {
    $valid = true;
    $description = 'Starscream is the treacherous Decepticon Air Commander and the deadliest of the Seekers. The self-proclaimed pride of the Cybertron War Academy, he&rsquo;s famous not only for his incredible skill, but also for his limitless (and troublesome) ambition. Starscream believes that he is more suited for command than Decepticon leader Megatron. Thankfully for Megatron, Starscream&rsquo;s mutinous, power-grabbing plots are almost always transparent, and he can never muster up enough patience to complete a grandiose power play. Even on the few times he has taken command of the Decepticons, he quickly loses control of a situation, but is too arrogant to realize when he&rsquo;s in over his head. He never learns from his mistakes, but then again, Megatron doesn&rsquo;t either, seeing as how he&rsquo;s never turned Starscream into slag. Despite his constant failures, Starscream believes it is only a matter of time before he prevails—his destiny is inevitable.';
  }else {
    $valid = false;
  };

  if ($valid == true) {
    return('
      <div class="card my-4 mx-auto" style="width: 20rem;">
        <img class="img-fluid" src="images/'.$type.'.jpg" alt="Card image cap">
        <div class="card-block">
          <h2 class="h4 card-title">'.titlecase($type).'</h2>
          <p class="card-text">'.$description.'</p>
        </div>
      </div>
    ');
  } else {
    return('
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <p class="m-0"><strong>'.capfirst($type).'? BY THE MATRIX!</strong><br> You are in the wrong universe.</p>
      </div>
    ');
  }
}
