<?php

namespace Database\Seeders\LET\Majorship\CultureAndArtsEducation;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CultureAndArtsEducationPart4Seeder extends Seeder
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

       // Part 4: Drama & Theatre Arts Education

       //1
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which dramatic structure describes the introduction of characters, setting, and conflict?',
           'choices'    => json_encode([
               'Exposition',
               'Climax',
               'Resolution',
               'Denouement',
           ]),
           'answer'     => 'Exposition',
           'explanation'=> 'The exposition presents background information and sets up the story.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //2
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'What term refers to the spoken text of a play?',
           'choices'    => json_encode([
               'Dialog',
               'Monologue',
               'Soliloquy',
               'Stage directions',
           ]),
           'answer'     => 'Dialog',
           'explanation'=> 'Dialog is the conversation between two or more characters.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //3
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which theatre practitioner is responsible for the overall artistic vision and guiding actors?',
           'choices'    => json_encode([
               'Director',
               'Playwright',
               'Producer',
               'Stage manager',
           ]),
           'answer'     => 'Director',
           'explanation'=> 'The director interprets the script and leads creative decisions.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //4
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'In scriptwriting, what is a “beat”?',
           'choices'    => json_encode([
               'A pause or shift in emotion',
               'A musical rhythm',
               'A scene heading',
               'A character name',
           ]),
           'answer'     => 'A pause or shift in emotion',
           'explanation'=> 'A beat indicates a moment of change or reaction in a scene.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //5
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which component of stagecraft involves designing and building scenery?',
           'choices'    => json_encode([
               'Set design',
               'Lighting design',
               'Costume design',
               'Sound design',
           ]),
           'answer'     => 'Set design',
           'explanation'=> 'Set design creates the physical environment for the action.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //6
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which lighting cue signals a scene change or dramatic effect?',
           'choices'    => json_encode([
               'Cue light',
               'Cue script',
               'Prompt book',
               'Fly system',
           ]),
           'answer'     => 'Cue light',
           'explanation'=> 'Cue lights instruct crew and actors about lighting changes.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //7
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'What is the primary purpose of a stage manager?',
           'choices'    => json_encode([
               'Coordinate all technical and rehearsal details',
               'Write the script',
               'Design costumes',
               'Audition actors',
           ]),
           'answer'     => 'Coordinate all technical and rehearsal details',
           'explanation'=> 'Stage managers ensure smooth communication and execution of the production.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //8
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which dramatic genre features exaggerated characters and risky situations?',
           'choices'    => json_encode([
               'Melodrama',
               'Comedy',
               'Tragedy',
               'Farce',
           ]),
           'answer'     => 'Melodrama',
           'explanation'=> 'Melodrama emphasizes sensational plot and emotional appeal.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //9
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'What term describes an actor speaking their thoughts aloud alone on stage?',
           'choices'    => json_encode([
               'Soliloquy',
               'Aside',
               'Monologue',
               'Dialogue',
           ]),
           'answer'     => 'Soliloquy',
           'explanation'=> 'A soliloquy reveals a character’s inner thoughts directly to the audience.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //10
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'In improvisational theatre, what rule encourages performers to accept offers and build on them?',
           'choices'    => json_encode([
               'Yes, and…',
               'No, but…',
               'Maybe later',
               'Stop and think',
           ]),
           'answer'     => 'Yes, and…',
           'explanation'=> 'The “Yes, and…” rule fosters agreement and collaborative storytelling.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //11
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which script formatting indicates where actors enter and exit?',
           'choices'    => json_encode([
               'Stage directions',
               'Dialogue',
               'Parentheticals',
               'Beat lines',
           ]),
           'answer'     => 'Stage directions',
           'explanation'=> 'Stage directions guide movement, entrances, exits, and technical cues.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //12
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'What is the term for the area of the stage closest to the audience?',
           'choices'    => json_encode([
               'Downstage',
               'Upstage',
               'Center stage',
               'Wings',
           ]),
           'answer'     => 'Downstage',
           'explanation'=> 'Downstage refers to the front portion of the stage area.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //13
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'In theatre, what are "wings"?',
           'choices'    => json_encode([
               'Areas offstage left and right',
               'Overhead rigging grid',
               'Seating areas',
               'Orchestra pit',
           ]),
           'answer'     => 'Areas offstage left and right',
           'explanation'=> 'Wings are the hidden areas where actors and props wait before entering.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //14
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which term describes the visual look and style of a production’s costumes, sets, and lighting?',
           'choices'    => json_encode([
               'Production design',
               'Script analysis',
               'Blocking',
               'Casting',
           ]),
           'answer'     => 'Production design',
           'explanation'=> 'Production design ensures cohesive aesthetic across all visual elements.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //15
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'What is "blocking" in rehearsal process?',
           'choices'    => json_encode([
               'Planning actors’ movements onstage',
               'Lighting setup',
               'Scriptwriting',
               'Costume fitting',
           ]),
           'answer'     => 'Planning actors’ movements onstage',
           'explanation'=> 'Blocking defines where actors move and stand during scenes.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //16
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which dramatic mode blends serious and humorous elements to reflect life’s complexities?',
           'choices'    => json_encode([
               'Tragicomedy',
               'Farce',
               'Melodrama',
               'Satire',
           ]),
           'answer'     => 'Tragicomedy',
           'explanation'=> 'Tragicomedy combines tragedy and comedy in a single narrative.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //17
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which method of character analysis uses detailed backstory and motivations?',
           'choices'    => json_encode([
               'Stanislavski technique',
               'Meisner technique',
               'Chekhov technique',
               'Uta Hagen technique',
           ]),
           'answer'     => 'Stanislavski technique',
           'explanation'=> 'Stanislavski system focuses on belief, emotion, and psychological truth.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //18
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'What term describes the physical space in which a play is performed?',
           'choices'    => json_encode([
               'Performance venue',
               'Rehearsal hall',
               'Backstage area',
               'Green room',
           ]),
           'answer'     => 'Performance venue',
           'explanation'=> 'Performance venue is the theatre or space where the audience watches.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //19
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'Which director’s concept involves a unifying idea that informs all production choices?',
           'choices'    => json_encode([
               'Director’s concept',
               'Actor’s process',
               'Producer’s agenda',
               'Playwright’s intent',
           ]),
           'answer'     => 'Director’s concept',
           'explanation'=> 'Director’s concept shapes interpretation and design decisions.',
           'created_at' => $now,
           'updated_at' => $now,
       ];

       //20
       $batch[] = [
           'subject_id' => 19,
           'part'       => 4,
           'question'   => 'What is the function of a prompt book?',
           'choices'    => json_encode([
               'Contains script, blocking notes, and technical cues',
               'Houses costumes',
               'Stores props',
               'Schedules rehearsals',
           ]),
           'answer'     => 'Contains script, blocking notes, and technical cues',
           'explanation'=> 'The prompt book is the master script used by the stage manager.',
           'created_at' => $now,
           'updated_at' => $now,
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
            $this->command->warn("Part 4 has only {$batchCount} questions. Minimum 20 required.");
        }

        // 3) Abort seeding if duplicates found or insufficient items
        if (!empty($dupes) || $batchCount < 20) {
            $this->command->info("Seeding aborted for part 4. Please resolve duplicates or add more questions.");
            return;
        }

        // 4) Insert all questions if checks pass
        DB::table('questions')->insert($batch);
        $this->command->info("{$batchCount} question(s) seeded for part 4.");
    }
}
