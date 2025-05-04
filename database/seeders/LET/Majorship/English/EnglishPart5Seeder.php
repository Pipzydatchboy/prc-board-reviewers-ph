<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart5Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $now = Carbon::now();

       //Question Starts Here...
       
       $batch = [];

       // 81
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "In Greek mythology, who is considered the king of the gods?",
           'choices'     => json_encode([
               'Zeus',
               'Poseidon',
               'Hades',
               'Apollo',
           ]),
           'answer'      => 'Zeus',
           'explanation' => 'Zeus is the ruler of Mount Olympus and the king of the Olympian gods.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 82
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "What is Ragnarok in Norse mythology?",
           'choices'     => json_encode([
               'A creation myth',
               'The final battle of the gods',
               'A festival of fire',
               'A realm of the dead',
           ]),
           'answer'      => 'The final battle of the gods',
           'explanation' => 'Ragnarok is the prophesied apocalypse where many gods will perish.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 83
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "Which deity is the Egyptian god of the sun?",
           'choices'     => json_encode([
               'Ra',
               'Anubis',
               'Osiris',
               'Horus',
           ]),
           'answer'      => 'Ra',
           'explanation' => 'Ra is worshiped as the sun god and one of the most important deities in ancient Egypt.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 84
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "In Philippine mythology, who emerged from the bamboo and became the first man?",
           'choices'     => json_encode([
               'Malakas',
               'Maganda',
               'Bathala',
               'Mayari',
           ]),
           'answer'      => 'Malakas',
           'explanation' => 'Malakas (strong) and Maganda (beautiful) came out of bamboo to become the first humans.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 85
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "Which creature has the upper body of a human and the tail of a fish?",
           'choices'     => json_encode([
               'Mermaid',
               'Centaur',
               'Minotaur',
               'Satyr',
           ]),
           'answer'      => 'Mermaid',
           'explanation' => 'Mermaids are sea-dwelling creatures with human upper bodies and fish tails.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 86
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "In Norse mythology, who is the trickster god known for shapeshifting?",
           'choices'     => json_encode([
               'Odin',
               'Loki',
               'Thor',
               'Freya',
           ]),
           'answer'      => 'Loki',
           'explanation' => 'Loki is famous for pranks, schemes, and changing shape at will.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 87
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "Which bird is a symbol of wisdom associated with Athena?",
           'choices'     => json_encode([
               'Owl',
               'Eagle',
               'Swan',
               'Hawk',
           ]),
           'answer'      => 'Owl',
           'explanation' => 'The owl represents wisdom and is closely linked to the goddess Athena.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 88
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "Which of the following was not one of the Twelve Labors of Hercules?",
           'choices'     => json_encode([
               'Slay the Nemean Lion',
               'Capture the Golden Hind',
               'Defeat the Minotaur',
               'Clean the Augean stables',
           ]),
           'answer'      => 'Defeat the Minotaur',
           'explanation' => 'These were the tasks of Theseus, not Hercules.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 89
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "Who are the Titans in Greek mythology?",
           'choices'     => json_encode([
               'Primordial gods who ruled before the Olympians',
               'Minor nature spirits',
               'Heroes of the Trojan War',
               'Sons of Zeus and Hera',
           ]),
           'answer'      => 'Primordial gods who ruled before the Olympians',
           'explanation' => 'Titans were elder gods overthrown by Zeus and the Olympians.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 90
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "In Greek belief, what is the name of the underworld ruled by Hades?",
           'choices'     => json_encode([
               'Elysium',
               'Tartarus',
               'Hades',
               'Olympus',
           ]),
           'answer'      => 'Hades',
           'explanation' => 'The underworld itself was commonly called Hades, named after its ruler.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 91
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "Who is the Roman counterpart of the Greek god Zeus?",
           'choices'     => json_encode([
               'Jupiter',
               'Mars',
               'Saturn',
               'Neptune',
           ]),
           'answer'      => 'Jupiter',
           'explanation' => 'Jupiter is the Roman king of gods, equivalent to Zeus.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 92
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "What riddle did the Sphinx ask Oedipus?",
           'choices'     => json_encode([
               'What walks on four legs in the morning?',
               'What is the air speed velocity of an unladen swallow?',
               'What has roots as nobody sees?',
               'What can run but never walks?',
           ]),
           'answer'      => 'What walks on four legs in the morning?',
           'explanation' => 'The correct answer is "man," who crawls as a baby and walks upright as an adult.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 93
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "Which mythical bird regenerates by rising from its own ashes?",
           'choices'     => json_encode([
               'Phoenix',
               'Griffin',
               'Pegasus',
               'Garuda',
           ]),
           'answer'      => 'Phoenix',
           'explanation' => 'The phoenix is a symbol of rebirth and renewal.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 94
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "What was released when Pandora's box was opened?",
           'choices'     => json_encode([
               'Hope and joy',
               'Evils and sorrows, leaving only hope behind',
               'The Titans',
               'Golden fleece',
           ]),
           'answer'      => 'Evils and sorrows, leaving only hope behind',
           'explanation' => 'All the world’s miseries escaped, but hope remained inside.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 95
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "What is Yggdrasil in Norse mythology?",
           'choices'     => json_encode([
               'A great ash tree connecting realms',
               'A mighty serpent',
               'A hall of heroes',
               'A warrior goddess',
           ]),
           'answer'      => 'A great ash tree connecting realms',
           'explanation' => 'Yggdrasil is the world tree that links the nine worlds.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 96
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "In Native American folklore, which animal often plays the role of the trickster?",
           'choices'     => json_encode([
               'Coyote',
               'Eagle',
               'Bear',
               'Turtle',
           ]),
           'answer'      => 'Coyote',
           'explanation' => 'Coyote is a common trickster figure in many Native American traditions.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 97
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "What heroic deed is Maui famous for in Polynesian mythology?",
           'choices'     => json_encode([
               'Slowing the sun',
               'Taming the wind',
               'Climbing Yggdrasil',
               'Opening Pandora’s box',
           ]),
           'answer'      => 'Slowing the sun',
           'explanation' => 'Maui lassoed the sun to extend daylight for his people.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 98
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "In Filipino mythology, what are anitos?",
           'choices'     => json_encode([
               'Spirits of ancestors and nature',
               'Mythical sea creatures',
               'Demon hunters',
               'Sacred talismans',
           ]),
           'answer'      => 'Spirits of ancestors and nature',
           'explanation' => 'Anitos are guardian spirits revered in indigenous Philippine religions.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 99
       $batch[] = [
        'subject_id'  => 10,
        'part'        => 5,
        'question'    => "Which goddess sprang fully grown and armed from Zeus's forehead?",
        'choices'     => json_encode([
            'Athena',
            'Artemis',
            'Hera',
            'Demeter',
        ]),
        'answer'      => 'Athena',
        'explanation' => "Athena was born from Zeus's head after he swallowed her pregnant mother, Metis.",
        'created_at'  => $now,
        'updated_at'  => $now,
    ];
       
       // 100
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 5,
           'question'    => "In the myth of Demeter and Persephone, what causes the change of seasons?",
           'choices'     => json_encode([
               'Demeter mourning Persephone’s absence each winter',
               'Poseidon’s sea storms',
               'Zeus’s decree',
               'Hades’s underworld gates closing',
           ]),
           'answer'      => 'Demeter mourning Persephone’s absence each winter',
           'explanation' => 'When Persephone is in the underworld, Demeter’s grief causes winter.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       

        // Retrieve existing questions to detect duplicates
        $existing = DB::table('questions')
            ->pluck('question')
            ->map(fn($q) => trim($q))
            ->all();

        // Check for duplicates against DB
        $dupes = [];
        foreach ($batch as $item) {
            if (in_array(trim($item['question']), $existing, true)) {
                $dupes[] = $item;
            }
        }

        $batchCount = count($batch);

        // 1) Inform about duplicates
        if (!empty($dupes)) {
            $this->command->warn("Detected " . count($dupes) . " duplicate question(s):");
            foreach ($dupes as $d) {
                $this->command->warn("  - {$d['question']}");
            }
        }

        // 2) Inform if question count is less than required
        if ($batchCount < 20) {
            $this->command->warn("Part 5 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 5. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 5.");
    }
}
