<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $books = Books::create(
    [
        'title' =>"Whispers of the Enchanted Grove",

        "userid" => "1",

        'author'=> "Unknown",

        'shortdescription' => "In a secluded village, a mysterious grove harbors ancient secrets. When a spirited young artist, Lily, stumbles upon a forgotten portal within her grandfather's attic, she discovers a realm where magic intertwines with reality. As she navigates the enchanted grove, facing mythical creatures and unlocking long-buried mysteries, Lily learns that the true magic lies within the depths of her own imagination.",

        'content' => "In the heart of a tranquil village nestled between rolling hills and meandering streams, a forgotten grove lay shrouded in mystery. Villagers spoke in hushed tones about the Enchanted Grove, warning of mystical creatures and whispers that danced through the rustling leaves. Among the villagers, Lily, a young artist with an insatiable curiosity, found herself drawn to the untold tales of the ancient woods.

        One rainy afternoon, while exploring her grandfather's cluttered attic, Lily stumbled upon a dusty, ornate key. Its intricate design hinted at a connection to the grove. Guided by an irresistible urge, Lily followed the whispers of the wind until she reached the grove's hidden entrance. With a hesitant turn of the key, she opened a portal to a realm where reality and magic coexisted.

        The Enchanted Grove unfolded before Lily like a canvas painted with vibrant hues of emerald and gold. Wisps of ethereal mist curled around ancient trees, and the air hummed with enchantment. A whimsical creature, part fox and part butterfly, approached Lily, leading her deeper into the mystical realm.

        As Lily ventured through the grove, she encountered mythical beings—talking trees, mischievous sprites, and a wise old dragon who spoke in riddles. Each creature shared tales of a long-forgotten prophecy that foretold the merging of worlds, a convergence that only the pure-hearted could initiate.

        Determined to unravel the grove's secrets, Lily embarked on a quest to collect magical artifacts scattered across the realm. Along the way, she faced challenges that tested her courage and creativity. Through her artistry, Lily breathed life into forgotten sculptures, mended the wings of a fallen fairy, and composed melodies that resonated with the heartbeat of the grove.

        As the mystical artifacts gathered, the whispers in the wind grew stronger. The creatures of the Enchanted Grove gathered, their eyes reflecting hope and anticipation. Lily, guided by her newfound friends, reached the heart of the grove where an ancient portal awaited activation.

        With a burst of creative energy, Lily unleashed the magic within her. The grove responded, shimmering with an otherworldly light. The portal flickered, bridging the gap between the enchanted realm and Lily's village. The convergence of worlds began, and the once-hidden grove became a gateway for imagination and wonder.

        In the wake of this magical union, the villagers discovered the grove's existence. Lily, now revered as a guardian of creativity, shared the enchanted world with her community. The once-whispered secrets of the Enchanted Grove became a source of inspiration, sparking the imagination of young and old alike.

        As seasons changed, and the grove continued to thrive, Lily realized that the true magic lay not just within the enchanted realm but in the boundless depths of her own imagination. The whispers of the grove became a melody that echoed in her heart, a reminder that magic is not confined to distant realms but woven into the very fabric of our dreams.

        And so, with paintbrush in hand and the echoes of mythical creatures in her ears, Lily continued to create, leaving a trail of enchanted whispers for those who dared to listen. The once-hidden grove became a testament to the enduring magic of imagination—a magic that, like whispers in the wind, would forever linger in the hearts of those touched by its spell.",


    ]);
    }
}
