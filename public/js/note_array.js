// Catatan nada kromatik
const notesChromatic = [
    "note_C", "note_CSharp", "note_D", "note_DSharp", "note_E",
    "note_F", "note_FSharp", "note_G", "note_GSharp", "note_A", "note_ASharp", "note_B"
];

// Fungsi bantu: Ambil semua tombol nada tunggal dan scale
const noteAll = document.getElementsByClassName("noteAll");


// Sembunyikan semua
function hideAllNotes() {
    for (let i = 0; i < noteAll.length; i++) {
        noteAll[i].style.visibility = "hidden";
        noteAll[i].classList.remove("highlight");
        noteAll[i].classList.remove(
            "color_A", "color_ASharp", "color_B", "color_C", "color_CSharp",
            "color_D", "color_DSharp", "color_E", "color_F", "color_FSharp",
            "color_G", "color_GSharp"
        );
    }

    // Bersihkan teks
    const scaleText = document.getElementById("scale_text");
    const chordText = document.getElementById("chord_text");
    if (scaleText) scaleText.textContent = "";
    if (chordText) chordText.textContent = "";
}
// Tampilkan hanya satu note
function showOnly(noteGroup) {
    hideAllNotes();
    for (let i = 0; i < noteGroup.length; i++) {
        noteGroup[i].style.visibility = "visible";
    }
    mainAll.textContent = "Show All Notes";
    toggled = false;
    
}

// Tampilkan semua note major scale
function showNotesByNames(noteNames) {
    hideAllNotes();

    const noteTextDiv = document.getElementById("scale_text");

    // Bersihkan teks lama
    noteTextDiv.textContent = "";



    // Tampilkan note 
    noteNames.forEach(noteClassName => {
        const elements = document.getElementsByClassName(noteClassName);
        for (let el of elements) {
            el.style.visibility = "visible";
            el.classList.add("highlight");

            const noteName = noteClassName.replace("note_", "");
            el.classList.add(`color_${noteName}`);
        }
    });

    // Ubah ke teks: ["note_C", "note_D", ...] → "C D E F G A B"
    const readable = noteNames.map(n => n.replace("note_", "").replace("Sharp", "#"));
    noteTextDiv.textContent = "Notes in Scale: " + readable.join(" - ");

    scaleAll.textContent = "Show All Notes";
    toggled = false;
}


// Dapatkan major scale dari root
function getMajorScaleNotes(rootNote) {
    const pattern = [2, 2, 1, 2, 2, 2, 1];
    const scale = [];
    let index = notesChromatic.indexOf("note_" + rootNote);
    if (index === -1) return scale;

    scale.push(notesChromatic[index]);
    for (let i = 0; i < pattern.length; i++) {
        index = (index + pattern[i]) % notesChromatic.length;
        scale.push(notesChromatic[index]);
    }
    return scale;
}

function getChordFamily(root) {
    const majorChordTypes = ["", "m", "m", "", "", "m", "dim", " (root)"];
    const scaleNotes = getMajorScaleNotes(root);
    const chords = [];

    for (let i = 0; i < scaleNotes.length; i++) {
        const noteName = scaleNotes[i].replace("note_", "").replace("Sharp", "#");
        const chordType = majorChordTypes[i];
        chords.push(noteName + chordType);
    }

    return chords; 
}

function displayScaleText(root) {
    const scaleDiv = document.getElementById("scale_text");
    const chordDiv = document.getElementById("chord_text");

    const scaleNotes = getMajorScaleNotes(root);
    const readable = scaleNotes.map(n => n.replace("note_", "").replace("Sharp", "#"));
    scaleDiv.textContent = `${root} Major Scale: ${readable.join(" - ")}`;
    scaleDiv.style.border = "2px solid black";
    scaleDiv.style.backgroundColor = "#bae1ff";

    const chords = getChordFamily(root);
    chordDiv.textContent = `${root} Major Family Chords: ${chords.join("  |  ")}`;
    chordDiv.style.border = "2px solid black";
    chordDiv.style.backgroundColor = "#F08B51";
}

// Tombol All Notes
const mainAll = document.getElementById("main_All");
let toggled = true;

mainAll.addEventListener("click", () => {
    if (toggled) {
        hideAllNotes();
        mainAll.textContent = "Show All Notes";
    } else {
        for (let i = 0; i < noteAll.length; i++) {
            noteAll[i].style.visibility = "visible";
        }
        mainAll.textContent = "Hide All Notes";
    }
    toggled = !toggled;
});

const scaleAll = document.getElementById("scale_All");
let toggledScale = true;
scaleAll.addEventListener("click", () => {
    if (toggledScale) {
        hideAllNotes();
        scaleAll.textContent = "Show Major Scale";
    } else {
        for (let i = 0; i < noteAll.length; i++) {
            noteAll[i].style.visibility = "visible";
        }
        scaleAll.textContent = "Hide Major Scale";
    }
    toggledScale = !toggledScale;
});

// Loop semua nada
const noteRoots = ["A", "ASharp", "B", "C", "CSharp", "D", "DSharp", "E", "F", "FSharp", "G", "GSharp"];

noteRoots.forEach(note => {
    // Tombol satu note
    const noteButton = document.getElementById(`main_${note}`);
    if (noteButton) {
        noteButton.addEventListener("click", () => {
            const group = document.getElementsByClassName(`note_${note}`);
            showOnly(group);
        });
    }

    // Tombol major scale, jika kamu tambahkan tombol ID `main_{NOTE}_scale`
    const scaleButton = document.getElementById(`main_${note}_scale`);
if (scaleButton) {
    scaleButton.addEventListener("click", () => {
        const scale = getMajorScaleNotes(note);
        showNotesByNames(scale);
        displayScaleText(note);
    });
}
});
