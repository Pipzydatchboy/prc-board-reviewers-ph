<?php

namespace Database\Seeders\LET\Majorship\English;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EnglishPart6Seeder extends Seeder
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

       // 101
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Chinua Achebe's novel 'Things Fall Apart' is set in which region of Nigeria?",
           'choices'     => json_encode([
               'Igbo homeland',
               'Yoruba city-states',
               'Northern Sahel',
               'Coastal Lagos',
           ]),
           'answer'      => 'Igbo homeland',
           'explanation' => 'The novel portrays pre-colonial life in the Igbo villages of southeastern Nigeria.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 102
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Japanese poem form consists of three lines with a 5-7-5 syllable pattern?",
           'choices'     => json_encode([
               'Haiku',
               'Tanka',
               'Senryu',
               'Renga',
           ]),
           'answer'      => 'Haiku',
           'explanation' => 'Haiku is a concise poetic form that traditionally reflects nature and seasons.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 103
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "The epic 'Mahabharata' originates from which country?",
           'choices'     => json_encode([
               'India',
               'Persia',
               'China',
               'Thailand',
           ]),
           'answer'      => 'India',
           'explanation' => 'The Mahabharata is one of the two major Sanskrit epics of ancient India.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 104
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Ghanaian writer won the Nobel Prize in Literature in 2021?",
           'choices'     => json_encode([
               'Nadine Gordimer',
               'Abdulrazak Gurnah',
               'Wole Soyinka',
               'Ben Okri',
           ]),
           'answer'      => 'Abdulrazak Gurnah',
           'explanation' => 'Gurnah, of Tanzanian origin, was recognized for his uncompromising and compassionate penetration of colonialism’s effects.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 105
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "The Chinese classic 'Dream of the Red Chamber' was written during which dynasty?",
           'choices'     => json_encode([
               'Ming',
               'Song',
               'Qing',
               'Tang',
           ]),
           'answer'      => 'Qing',
           'explanation' => 'While started in the early Qing dynasty, it reflects society’s decline by the mid-Qing era.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 106
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Persian poet wrote the 'Rubáiyát' famously translated by Edward FitzGerald?",
           'choices'     => json_encode([
               'Hafez',
               'Saadi',
               'Omar Khayyám',
               'Rumi',
           ]),
           'answer'      => 'Omar Khayyám',
           'explanation' => 'The Rubáiyát is a collection of quatrains attributed to Khayyám.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 107
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Nigerian playwright wrote 'Death and the King’s Horseman'?",
           'choices'     => json_encode([
               'Chinua Achebe',
               'Wole Soyinka',
               'Ben Okri',
               'Ama Ata Aidoo',
           ]),
           'answer'      => 'Wole Soyinka',
           'explanation' => 'Soyinka’s play explores cultural conflict and colonial impact in Nigeria.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 108
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "The Korean novel 'The Vegetarian' was written by which author?",
           'choices'     => json_encode([
               'Han Kang',
               'Kobo Abe',
               'Yasunari Kawabata',
               'Banana Yoshimoto',
           ]),
           'answer'      => 'Han Kang',
           'explanation' => 'Han Kang’s novel won the Man Booker International Prize in 2016.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 109
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which African novel begins with the line 'You were not There'?",
           'choices'     => json_encode([
               'Things Fall Apart',
               'Half of a Yellow Sun',
               'Cry, the Beloved Country',
               'A Grain of Wheat',
           ]),
           'answer'      => 'Half of a Yellow Sun',
           'explanation' => 'Chimamanda Ngozi Adichie’s novel opens with a nostalgic reflection.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 110
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Japanese author wrote 'Norwegian Wood'?",
           'choices'     => json_encode([
               'Yukio Mishima',
               'Haruki Murakami',
               'Kenzaburo Oe',
               'Ryunosuke Akutagawa',
           ]),
           'answer'      => 'Haruki Murakami',
           'explanation' => 'Murakami’s novel brought him international fame.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 111
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Ethiopian epic recounts the adventures of the hero Kassa?",
           'choices'     => json_encode([
               'Gadaa',
               'Kebra Nagast',
               'Fetha Nagast',
               'Kassa Dawit',
           ]),
           'answer'      => 'Kebra Nagast',
           'explanation' => 'Though religious, it includes tales of Solomon’s lineage in Ethiopia.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 112
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which modern Chinese writer authored 'Wild Swans'?",
           'choices'     => json_encode([
               'Jung Chang',
               'Gao Xingjian',
               'Mo Yan',
               'Liu Cixin',
           ]),
           'answer'      => 'Jung Chang',
           'explanation' => 'Wild Swans is a family memoir spanning three generations in twentieth-century China.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 113
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Urdu poet is known for his ghazals and 'Diwan-e-Ghalib'?",
           'choices'     => json_encode([
               'Mirza Ghalib',
               'Allama Iqbal',
               'Faiz Ahmed Faiz',
               'Ahmed Faraz',
           ]),
           'answer'      => 'Mirza Ghalib',
           'explanation' => 'Ghalib’s works are central to Urdu poetic tradition.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 114
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which South African author wrote 'Waiting for the Barbarians'?",
           'choices'     => json_encode([
               'J.M. Coetzee',
               'Nadine Gordimer',
               'Alan Paton',
               'Zakes Mda',
           ]),
           'answer'      => 'J.M. Coetzee',
           'explanation' => 'Coetzee’s novel is an allegory on oppression and colonialism.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 115
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Filipino writer authored 'Noli Me Tangere'?",
           'choices'     => json_encode([
               'José Rizal',
               'Nick Joaquin',
               'Carlos Bulosan',
               'Lualhati Bautista',
           ]),
           'answer'      => 'José Rizal',
           'explanation' => 'Noli Me Tangere is a seminal novel critiquing Spanish colonial rule in the Philippines.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 116
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Malaysian author wrote 'The Garden of Evening Mists'?",
           'choices'     => json_encode([
               'Tash Aw',
               'Tan Twan Eng',
               'Shirley Geok-lin Lim',
               'Latiff Mohidin',
           ]),
           'answer'      => 'Tan Twan Eng',
           'explanation' => 'The novel explores memory and landscape in post-war Malaya.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 117
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Iraqi poet wrote the collection 'A River Dies of Thirst'?",
           'choices'     => json_encode([
               'Nazik Al-Malaika',
               'Badr Shakir al-Sayyab',
               'Mahmoud Darwish',
               'Adonis',
           ]),
           'answer'      => 'Badr Shakir al-Sayyab',
           'explanation' => 'Al-Sayyab is considered a pioneer of modern Arabic poetry.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 118
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Japanese playwright is known for the play 'The Love Suicides at Sonezaki'?",
           'choices'     => json_encode([
               'Chikamatsu Monzaemon',
               'Zeami Motokiyo',
               'Kawabata Yasunari',
               'Tsubouchi Shoyo',
           ]),
           'answer'      => 'Chikamatsu Monzaemon',
           'explanation' => 'Chikamatsu is often called the Shakespeare of Japan.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 119
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which Chinese poet is credited with writing 'Quiet Night Thought'?",
           'choices'     => json_encode([
               'Li Bai',
               'Du Fu',
               'Wang Wei',
               'Bai Juyi',
           ]),
           'answer'      => 'Li Bai',
           'explanation' => 'Li Bai’s poem reflects homesickness and the moonlit night.',
           'created_at'  => $now,
           'updated_at'  => $now,
       ];
       
       // 120
       $batch[] = [
           'subject_id'  => 10,
           'part'        => 6,
           'question'    => "Which novel by Kenzaburo Oe addresses the aftermath of World War II in Japan?",
           'choices'     => json_encode([
               'A Personal Matter',
               'The Silent Cry',
               'The Temple of the Golden Pavilion',
               'Victims of a Map',
           ]),
           'answer'      => 'A Personal Matter',
           'explanation' => 'Oe’s novel explores personal and national trauma post-war.',
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
            $this->command->warn("Part 6 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 6. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 6.");
    }
}
