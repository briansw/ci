module ReadingsHelper

  def pdf_or_url(reading)
    if reading.link.present?
      reading.link
    else
      reading.pdf.attachment_url
    end
  end

end