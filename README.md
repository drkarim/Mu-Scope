# Mu-Scope
**Museum-Scope** <em>A web interface, to interact and learn about digitised specimens from the Museum of Life Sciences, using Unity Web Player and the open-source DWV viewer.</em>


##### LARGE UPDATE COMING SOON <small>[by 26 June at 23:59]</small>
This update will include:
- DICOM and Unity player working in unison on the /specimen.php page. However there has been trouble with linking the DICOM viewer to its associated specimen.
- A polished navigation system for all of the different collections of the musuem. XML/PHP all work together to provide the information displayed.
- Addition of lots of temporary content to show off the new design's capabilities.
- A unified CSS design across the whole website, removing the modern red navbar for a more classic 'paper-style' in keeping with the classic natural history feel.
- Lots of small bugs squashed. The unity player now displays inline on mobile devices. The navbar now works with mobile devices and does not overflow. Issues with buttons not displaying properly have been fixed.

## ROADMAP 

### Priority things to do

- [x] **Create a specimen page template, so dicom, stl and information about the animal all appear together in unison**. Might be fun to assign a different colour to each specimen? Designing it like an A4 paper factsheet might work really well.
- [x] **Unity Player working inline on the specimen page** directly integrated into the HTML/JS/CSS code.
- [x] **Point specimen page template to xml file using php** so with every different specimen the information, dicom and stl are different but the format will always be the same.
- [x] **Get Dicom Viewer working inline on specimen page**, use iframes. A test shows that the iframes are the solution and works really well.
- [ ] **Enhance the Unity Web Player**. Perhaps add numbers or labels? Make it easier to learn about the features and the markings etc. This could be difficult with each specimen, it will be hard to add new labels every time. Also and improvement of lighting and textures.

### Other things to do

- [x] **Write css template** to overlay the bootstrap theme. (Custom fonts, introduce some subtle colour etc).
- [x] **Create a specimen page template, so dicom, stl and information about the animal all appear together in unison**. Might be fun to assign a different colour to each specimen? Designing it like an A4 paper factsheet might work really well.
- [x] **Create a homepage** so there is a small introduction about the life sciences museum, and then five different divs for each collection (the Zoological Collection, Botanical Collection, Pharmaceutical Collection, Microscope Slide Collection, Craniofacial Skeletal Collection). The navbar at the top should include (HOME, COLLECTIONS, WHAT’S ON, ABOUT).
- [ ] **Zoological collection page** or the current landing page, needs photos. Go to the Life Sciences musuem to take some pictures for use on the website.

### Bugs

- [x] **img placeholder** needs to be replaced with xml file image. At current, an img folder has been created to serve as a place for the jpg files. 
- [ ] **Dicom and Stl viewer do not change model with different specimen**, at the moment the Dicom Viewer is stuck on the hedgehog skull.
- [ ] **fullscreen unity player** - the button fails to work and has been commented out at the moment.

### New Ideas and Suggestions

- **[Sketchfab](https://sketchfab.com/models/209bffe6866042379a704ce46bb6e632)** - example from the natural history museum in Oxford. Same thing as what we are doing however will be harder to implement it all automatically. Quality is very good though, useful for ideas. Has google cardboard support which could be interesting.
- **MuseumofLifeSciences.com** is available
- **000Webhost.com can be used to run the website for free** however there are drawbacks. It will not pull from the github repository, and the space is limited, but may be good for a demo.
