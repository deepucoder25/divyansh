<div class="modal fade contact-custom-modal" id="qteModal" tabindex="-1" role="dialog" aria-labelledby="qteModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="contact-form-header">
                <span>Get a free quote</span>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" onclick="setClose()">
                    <span aria-hidden="true"><i class="bi bi-x-lg"></i></span>
                </button>
            </div>
            <form id="quotemodal" class="ajax-form" data-url="<?php echo site_url('contacts/booking') ?>" data-result="resultquotemodal" onsubmit="return false;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-person-badge"></i>
                                <label for="m_name" class="visually-hidden">Your Name</label>
                                <input type="text" id="m_name" class="form-control" name="name" placeholder="Your Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-phone-vibrate"></i>
                                <label for="m_phone" class="visually-hidden">Mobile Number</label>
                                <input type="tel" id="m_phone" class="form-control" name="phone" placeholder="Mobile Number">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-envelope-at"></i>
                                <label for="m_email" class="visually-hidden">Your Email</label>
                                <input type="text" id="m_email" class="form-control" name="email" placeholder="Your Email">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-geo-alt-fill"></i>
                                <label for="m_mfrom" class="visually-hidden">From City</label>
                                <input type="text" id="m_mfrom" class="form-control" name="mfrom" placeholder="From City">
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <div class="form-icon">
                                <i class="bi bi-map-fill"></i>
                                <label for="m_mto" class="visually-hidden">To City</label>
                                <input type="text" id="m_mto" class="form-control" name="mto" placeholder="To City">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-icon">
                        <i class="bi bi-chat-left-text"></i>
                        <label for="m_message" class="visually-hidden">Describe your relocation needs</label>
                        <textarea id="m_message" name="message" cols="30" rows="5" class="form-control" placeholder="Describe your relocation needs..."></textarea>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-2 contact-quote-gap">
                    <button id="submitbquotemodal" type="submit" class="theme-btn">Get My Free Quote <i class="bi bi-send-fill"></i></button>
                    <button onclick="document.getElementById('resultquotemodal').innerHTML = '';" type="reset" class="theme-btn">Clear Form</button>
                </div>
 
                <div id="resultquotemodal"></div>
            </form>
        </div>
    </div>
</div>