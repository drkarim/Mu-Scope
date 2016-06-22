# Mu-Scope
Web framework for listing DICOMs that uses the DWV web dicom viewer

##### MOST RECENT UPDATE <small>[better navigation, xml & php support]</small>

- Pages renamed. The landing page has been renamed to collections, and the starting page renamed to welcome. 
- Unecessary files deleted (certain html files were not being used.
- The specimen page now works fully with the xml document. All the names, descriptions etc are pulled from the xml file. One bug is that the stll viewer is still fixed on the hedgehog model and does not change with the information. 
- The specimen page now has a javascript button at the end taking the user back to the collection he/she was looking at previously.
- The new collections page (or old landing page) is in the process of a revamp (some bugs present and photos need updating). The user can choose between the five offical categories and an other section. Clicking on one of the categories opens an in-window popup, allowing the user to select what he or she wants to learn more about. The advantage of this 'popup' is that the information is all loaded from the beginning shortening waiting times. 
- Other small tweaks and additions include the use of font-awesome buttons, a folder has been created under api.

## ROADMAP 

### Priority things to do

- [x] **Create a specimen page template, so dicom, stl and information about the animal all appear together in unison**. Might be fun to assign a different colour to each specimen? Designing it like an A4 paper factsheet might work really well.
- [x] **Unity Player working inline on the specimen page** directly integrated into the HTML/JS/CSS code.
- [x] **Point specimen page template to xml file using php** so with every different specimen the information, dicom and stl are different but the format will always be the same.
- [ ] **Get Dicom Viewer working inline on specimen page**, use iframes?
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
