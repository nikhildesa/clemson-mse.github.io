<!-- Header -->
<?php include('header.php'); ?>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('images/newvisualization1.png')">
            <div class="carousel-caption d-none d-md-block">
              <h3>First Slide</h3>
              <p>This is a description for the first slide.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('http://placehold.it/1900x1080')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4"><strong>Clemson Computational Materials Science Group</strong></h1>



      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Welcome to the homepage of the Computational Materials Science Group at Clemson University. In the Schiller Research Group,
             we use computer simulations to study the structure and properties of soft and flowing matter. We apply <strong>multiscale modeling
              and simulation</strong> algorithms such as the <strong>Lattice Boltzmann Method</strong> and Molecular Dynamics to investigate
             the dynamics of complex fluids and biomaterials.</br></br>Most problems we study involve fluid transport and multiphase phenomena, and we are particularly
            interested in the non-equilibrium properties of complex fluids as they relate to materials performance. Driven by this interest, we aim at the discovery
           and design of new materials through computational science. We target relevant engineering applications such as energy materials (fuel cells) and biomedical
          devices (vascular stents).</br></br>Most of our research is based on computer simulations that are carried out with open-source software packages such as ESPResSo,
         LB3D, and HemeLB. We employ advanced algorithms and parallel workflows that make use of Clemson's high performance computing cluster Palmetto and other HPC facilities.</br></br>
       As a team we work with experimental researchers, scientists and engineers from other disciplines, and industrial stakeholders. We also have active collaborations with researchers
      and clinicians at Greenville Health System (GHS).</br></br>We enjoy collaborating on scientific questions and modern engineering challenges. Feel free to take a tour of our web site or visit us in person.</p>
        </div>
        <div class="col-md-4">
          <h3><strong>Principal Investigator</strong></h3>
          <p><strong>Ulf D. Schiller</strong> (Dr. rer.-nat., Dipl.-Phys., Dipl.-Inform.)
          </br>Assistant Professor, Materials Science and Engineering
        </br>Faculty Scholar, Clemson University School of Health Research
      </br>Email: uschill[at]clemson.edu</p>
      <a class="btn btn-lg btn-secondary btn-block" style="background-color:#F66733" href="people.php">About Us</a>
        </div>
      </div>
      <hr>
    </div>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </body>

</html>
