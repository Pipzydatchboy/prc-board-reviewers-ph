<?php

namespace Database\Seeders\LET\Majorship\ValuesEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ValuesEducationPart10Seeder extends Seeder
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

       // Part 10 – Question 1
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which Sustainable Development Goal target emphasizes education for sustainable development, global citizenship, and cultural diversity awareness?',
           'choices'      => json_encode([
               '4.5',
               '4.7',
               '5.1',
               '6.2',
           ]),
           'answer'       => '4.7',
           'explanation'  => 'SDG Target 4.7 focuses on education for sustainable development, global citizenship, and appreciation of cultural diversity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 2
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which ASEAN blueprint seeks to foster a caring, sharing, and inclusive community among member states?',
           'choices'      => json_encode([
               'ASEAN Political-Security Community Blueprint',
               'ASEAN Socio-Cultural Community Blueprint 2025',
               'ASEAN Economic Community Blueprint',
               'Bonn-Copenhagen Declaration',
           ]),
           'answer'       => 'ASEAN Socio-Cultural Community Blueprint 2025',
           'explanation'  => 'The ASEAN Socio-Cultural Community Blueprint 2025 aims to build a people-oriented, people-centered ASEAN by promoting cooperation in education and culture.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 3
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which UNESCO initiative focuses on nurturing global citizens who respect human rights, diversity, and sustainability?',
           'choices'      => json_encode([
               'Education for All',
               'Global Citizenship Education',
               'Science for Peace',
               'Heritage of Humanity',
           ]),
           'answer'       => 'Global Citizenship Education',
           'explanation'  => 'UNESCO\'s Global Citizenship Education aims to equip learners with skills and values to foster peace, justice, and sustainability.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 4
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which CHED memorandum promotes the integration of service learning into higher education curricula in the Philippines?',
           'choices'      => json_encode([
               'CMO No. 1, s. 2010',
               'CMO No. 23, s. 2013',
               'CMO No. 31, s. 2012',
               'CMO No. 47, s. 2005',
           ]),
           'answer'       => 'CMO No. 23, s. 2013',
           'explanation'  => 'CHED Memorandum Order No. 23, series of 2013, institutionalized service learning as a graduation requirement for Philippine higher education institutions.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 5
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which UNESCO framework outlines Education for Sustainable Development goals to be achieved by 2030?',
           'choices'      => json_encode([
               'Man and the Biosphere',
               'ESD for 2030',
               'World Heritage Convention',
               'Memory of the World',
           ]),
           'answer'       => 'ESD for 2030',
           'explanation'  => 'UNESCO\'s Education for Sustainable Development (ESD) for 2030 framework promotes sustainability ethics and values in education.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 6
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which international convention safeguards the rights and well-being of children, embedding values of protection and participation?',
           'choices'      => json_encode([
               'CRC',
               'CEDAW',
               'ICCPR',
               'ICESCR',
           ]),
           'answer'       => 'CRC',
           'explanation'  => 'The UN Convention on the Rights of the Child (CRC) protects children\'s rights to education, participation, and protection.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 7
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which papal encyclical emphasizes care for creation and ethical responsibility toward the environment?',
           'choices'      => json_encode([
               'Evangelii Gaudium',
               'Laudato Si\'',
               'Caritas in Veritate',
               'Veritatis Splendor',
           ]),
           'answer'       => 'Laudato Si\'',
           'explanation'  => 'Pope Francis\' Laudato Si\' calls for ecological conversion and ethical stewardship of the environment.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 8
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which Philippine law institutionalizes the right to mental health care, fostering values of compassion and support?',
           'choices'      => json_encode([
               'RA 11036',
               'RA 10121',
               'RA 9165',
               'RA 10687',
           ]),
           'answer'       => 'RA 11036',
           'explanation'  => 'The Mental Health Act (RA 11036) ensures access to mental health services and promotes compassionate care.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 9
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which foundational human rights document begins with the recognition of the inherent dignity and equal rights of all humans?',
           'choices'      => json_encode([
               'UDHR',
               'CESCR',
               'UNESCO Charter',
               'Geneva Convention',
           ]),
           'answer'       => 'UDHR',
           'explanation'  => 'The Universal Declaration of Human Rights affirms dignity, freedom, and equality as universal values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 10
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which Philippine national event commemorates the peaceful assertion of people power and civic unity?',
           'choices'      => json_encode([
               'EDSA People Power Anniversary',
               'Independence Day',
               'Araw ng Kagitingan',
               'National Language Month',
           ]),
           'answer'       => 'EDSA People Power Anniversary',
           'explanation'  => 'The EDSA People Power Anniversary commemorates the 1986 peaceful revolution that demonstrated civic unity and democratic values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 11
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which global climate agreement unites nations to combat climate change and demonstrate global cooperation?',
           'choices'      => json_encode([
               'Kyoto Protocol',
               'Paris Agreement',
               'Montreal Protocol',
               'Geneva Convention',
           ]),
           'answer'       => 'Paris Agreement',
           'explanation'  => 'The Paris Agreement (2015) commits countries to mitigate climate change, reflecting values of global cooperation.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 12
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which law promotes patriotism and respect for national symbols like the flag and anthem?',
           'choices'      => json_encode([
               'RA 8491',
               'RA 10173',
               'RA 9003',
               'RA 11032',
           ]),
           'answer'       => 'RA 8491',
           'explanation'  => 'The Flag and Heraldic Code (RA 8491) mandates respect for Philippine national symbols, fostering patriotism.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 13
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which UNESCO convention helps safeguard intangible cultural heritage, preserving community values and traditions?',
           'choices'      => json_encode([
               'World Heritage Convention',
               'Intangible Heritage Convention',
               'Biosphere Reserve Program',
               'Memory of the World',
           ]),
           'answer'       => 'Intangible Heritage Convention',
           'explanation'  => 'The UNESCO Convention for the Safeguarding of Intangible Cultural Heritage protects practices that embody community values.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 14
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which Philippine legislation criminalizes human trafficking, upholding values of human dignity?',
           'choices'      => json_encode([
               'RA 9208',
               'RA 9346',
               'RA 9165',
               'RA 7610',
           ]),
           'answer'       => 'RA 9208',
           'explanation'  => 'The Anti-Trafficking in Persons Act (RA 9208) protects victims and affirms the value of human dignity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 15
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which law addresses violence against women and children, reinforcing values of respect and protection?',
           'choices'      => json_encode([
               'RA 9262',
               'RA 9003',
               'RA 11036',
               'RA 10931',
           ]),
           'answer'       => 'RA 9262',
           'explanation'  => 'The Anti-Violence Against Women and Their Children Act (RA 9262) upholds values of respect, dignity, and protection.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 16
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which Philippine act mandates disaster risk reduction, emphasizing solidarity and mutual aid?',
           'choices'      => json_encode([
               'RA 10121',
               'RA 11036',
               'RA 9003',
               'RA 9165',
           ]),
           'answer'       => 'RA 10121',
           'explanation'  => 'The Disaster Risk Reduction and Management Act (RA 10121) promotes community resilience and bayanihan in crises.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 17
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which environmental law promotes ecological stewardship and sustainable waste management?',
           'choices'      => json_encode([
               'RA 9003',
               'RA 9208',
               'RA 11032',
               'RA 9262',
           ]),
           'answer'       => 'RA 9003',
           'explanation'  => 'The Ecological Solid Waste Management Act (RA 9003) enshrines environmental stewardship and community responsibility.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 18
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which ASEAN declaration calls for promoting a culture of tolerance and mutual respect?',
           'choices'      => json_encode([
               'ASEAN Declaration on Culture of Tolerance',
               'ASEAN Declaration on Human Rights',
               'ASEAN Declaration on Climate Action',
               'ASEAN Declaration on Internet Freedom',
           ]),
           'answer'       => 'ASEAN Declaration on Culture of Tolerance',
           'explanation'  => 'The ASEAN Declaration on Culture of Tolerance encourages respect for diversity and peaceful coexistence.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 19
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which Philippine law enhances transparency and accountability in public services, embodying values of integrity?',
           'choices'      => json_encode([
               'RA 11032',
               'RA 10173',
               'RA 9003',
               'RA 11036',
           ]),
           'answer'       => 'RA 11032',
           'explanation'  => 'The Ease of Doing Business Act (RA 11032) promotes transparency and accountability, reinforcing public integrity.',
           'created_at'   => $now,
           'updated_at'   => $now,
       ];

       // Part 10 – Question 20
       $batch[] = [
           'subject_id'   => 15,
           'part'         => 10,
           'question'     => 'Which Filipino value best describes communal unity and cooperative effort?',
           'choices'      => json_encode([
               'Pakikisama',
               'Bayanihan',
               'Utang na loob',
               'Hiya',
           ]),
           'answer'       => 'Bayanihan',
           'explanation'  => 'Bayanihan epitomizes communal unity and cooperation, where members help one another willingly.',
           'created_at'   => $now,
           'updated_at'   => $now,
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
            $this->command->warn("Part 10 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 10. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 10.");
    }
}
