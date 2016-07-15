# Mu-Scope
**Museum-Scope** <em>A web interface, to interact and learn about digitised specimens from the Museum of Life Sciences, using Unity Web Player and the open-source DWV viewer.</em>


##### THE **BIG RED** UPDATE <small>[Release 1.0]</small>
This update includes:

- **Overhaul of the whole CSS design of the website.** It treads a fine line between contemporary web design and the classic look and feel of the museum. King’s red is used throughout. The red navbar has been refreshed in favour of a sepia/paper look.
- **Restructured the xml/php,** ‘vertebrates’ have been renamed to ‘zoological’. ’specimens’ have been renamed to ‘collection’ to avoid confusion with the other specimen subvariable. And other small performance tweaks.
- **Welcome page has been brightened up.** Sizes rearranged so it works on tablets and mobile devices. 
- What’s On page now has custom social buttons.
- **The Collections page navigation system is now in a polished state**, php and xml working together in unison. Six animated collections to choose from. Opening a collection initiates a loss of focus, and previews pop up. The previews have symbols in the right-hand corner indicating whether they contain either/or a dicom/stl viewer. These symbols are flexible and use php to pull the information from the xml file.
- **Both the dicom/stl viewers are now integrated into the specimen page** however the dicom requires manual loading of the files. The dicom/stl symbols are present as well.
- **Lots of small bugs squashed**. The unity player now displays inline on mobile devices. The navbar is now mobile friendly and no longer overflows.



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
- [ ] **PHP/XML has issues** with finding new specimens.
- [ ] **navbar-toggle** stuck on white on mobile devices


### New Ideas and Suggestions

- **[Sketchfab](https://sketchfab.com/models/209bffe6866042379a704ce46bb6e632)** - example from the natural history museum in Oxford. Same thing as what we are doing however will be harder to implement it all automatically. Quality is very good though, useful for ideas. Has google cardboard support which could be interesting.
- **[MuseumofLifeSciences.com](MuseumofLifeSciences.com)** is available
- **[000Webhost](000Webhost.com) can be used to run the website for free** however there are drawbacks. It will not pull from the github repository, and the space is limited, but may be good for a demo.
