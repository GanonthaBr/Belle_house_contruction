 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close d-flex align-items-center justify-content-center" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true" class="fa fa-close"></span>
                 </button>
             </div>
             <div class="modal-body p-4 p-md-5">
                 <form action="{{route('modal.store')}}" class="appointment-form ftco-animate" method="POST" enctype="multipart/form-data">
                     @csrf
                     <h3>Faire une Requete</h3>
                     <div class>
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Nom" name="name">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Prenom" name="lastname">
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" placeholder="Tel" name="phone">
                         </div>
                     </div>
                     <div class>
                         <div class="form-group">
                             <div class="form-field">
                                 <div class="select-wrap">
                                     <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                     <select name="service" id class="form-control">
                                         <option value>Selectionner un Service</option>
                                         <option value="Architecture">Architecture</option>
                                         <option value="Renovation">Renovation</option>
                                         <option value="Construction">Construction</option>
                                         <option value="Autre Services">Autre Services</option>
                                     </select>
                                 </div>
                             </div>
                         </div>

                         <div class="form-group">
                             <textarea cols="30" rows="4" class="form-control" placeholder="Message" name="contentmessage"></textarea>
                         </div>
                         <div class="form-group">
                             <input type="submit" value="Envoyer Maintenant!" class="btn btn-primary py-3 px-4">
                         </div>

                 </form>
             </div>
         </div>
     </div>
 </div>